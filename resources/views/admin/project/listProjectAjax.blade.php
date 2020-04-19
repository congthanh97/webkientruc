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
                <a href="{{url('admin/project/delete/'.$project->id)}}" class="icon-delete" ><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
       </tr>
       <?php $dem++; ?>
    @endforeach
   </tbody>
</table>
{{ $projects->links() }}
