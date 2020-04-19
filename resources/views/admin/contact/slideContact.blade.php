@extends('admin/index')
@section('content')
<!-- main-heading -->

<h2 class="main-title-w3layouts mb-2 text-center">Slide trang contact</h2>
<!--// main-heading -->

<!-- Cards content -->
<section class="content">
    <div class="container-fluid">
      <a href="{{url('admin/addSlideContact')}}" class="btn btn-primary" style="margin-bottom: 10px;" >Thêm mới slide</a>
    </div>
    <div class="container-fluid">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>STT</td>
            <td>Image</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @if(count($slidecontacts)!=0)
            @foreach($slidecontacts as $slc)
            <tr>
              <td>{{$slc->number}}</td>
              <td>{{$slc->image}}</td>
              <td>
                <a href="{{url('admin/editSlideContact/'.$slc->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                <a href="{{url('admin/deleteSlideContact/'.$slc->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không');"><i class="fa fa-trash" aria-hidden="true" ></i></a>
              </td>
            </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
</section>

@endsection