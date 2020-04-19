@extends('admin/index')
@section('content')
<!-- main-heading -->

<h2 class="main-title-w3layouts mb-2 text-center">Dự án</h2>
<!--// main-heading -->

<!-- Cards content -->
<section class="content">
    <div class="categories container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <select id="cateId" class="col-lg-4 col-md-6 col-sm-12 col-xs-12 form-control">
                    <option value="all" class="searchByCate">Tất cả</option>
                    <?php $categories = $category::getCategories(); ?>
                    @foreach($categories as $cates)
                     <option value="{{$cates->id}}" class="searchByCate" " >{{$cates->cateName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="list-project">
       <table class="list-project table table-striped table-bordered">
        <?php $dem = 1; ?>
           <thead>
               <tr>
                   <td width="10%">STT</td>
                   <td width="15%">Danh mục</td>
                   <td width="30%">Tên dự án</td>
                   <td width="10%">Người cập nhập</td>
                   <td width="10%">Ngày tạo</td>
                   <td width="15%">Ngày cập nhập</td>
                   <td width="10%"></td>
               </tr>
           </thead>
           <tbody>
            @foreach($projects as $project)
            <?php 
              $cate = $category::getCateById($project->cateId);
              $username = $user::getUserById($project->poster);
             ?>
               <tr>
                   <td>{{$dem}}</td>
                   <td>{{$cate->cateName}}</td>
                   <td>{{$project->projectName}}</td>
                   <td>{{$username->username}}</td>
                   <td>{{$project->created_at}}</td>
                   <td>{{$project->updated_at}}</td>
                   <td>
                        <!-- edit -->
                        <a href="{{url('admin/project/edit/'.$project->id)}}" class="icon-edit" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <!-- delete -->
                        <a href="{{url('admin/project/delete/'.$project->id)}}" class="icon-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không');" ><i class="fa fa-trash" aria-hidden="true" ></i></a>
                    </td>
               </tr>
               <?php $dem++; ?>
            @endforeach
           </tbody>
       </table>
       {{ $projects->links() }}
    </div>
</section>

<script>
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var cateId = $('#cateId').val();


    $('#cateId').change(function(event) {
      /* Act on the event */
      cateId = $(this).val();
      console.log(cateId);
      $.ajax({
        url: 'project',
        type: 'POST',
        data: {cateId: cateId},
      })
      .done(function(res) {
        $('#list-project').html(res);
      })      
    });
    $('#search').click(function(event) {
      /* Act on the event */
      var keyword = $('#keyword').val();
      alert(keyword);
      $.ajax({
        url: 'project',
        type: 'POST',
        data: {
          keyword: keyword,
          cateId: cateId
        },
      })
      .done(function(res) {
        $('#list-project').html(res);
      })      
    });
  });  
</script>
@endsection