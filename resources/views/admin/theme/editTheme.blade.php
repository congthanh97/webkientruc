@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Chủ đề</h2>
<!--// main-heading -->
<section class="content">

		<section>
		<div class="row">
			<div class="col-md-12">
				<a href="{{url('admin/addSlideHome')}}" class="btn btn-primary col-md-3" style="margin-bottom: 10px;">
					Thêm mới slide
				</a>
			</div>
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<thead class="text-center">
						<tr>
							<td>STT</td>
							<td>Image</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@if(count($slidehomes)!=0)
							@foreach($slidehomes as $slh)
							<tr>
								<td>{{$slh->number}}</td>
								<td>{{$slh->image}}</td>
								<td>
									<a href="{{url('admin/editSlideHome/'.$slh->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
									<a href="{{url('admin/deleteSlideHome/'.$slh->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không');" ><i class="fa fa-trash" aria-hidden="true" ></i></a>
								</td>
							</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group col-md-12">
				<label for="videoUrl" class="col-md-3">Video chủ đề</label>
				<input type="text" name="videoUrl" value="{{$theme->videoUrl}}" class="col-md-9 form-control">
			</div>
			<!-- ckeditor & ckfinder -->
    		<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    		<script src="{{asset('public/ckeditor/ckfinder/ckfinder.js')}}"></script>
    		<!-- ckeditor & ckfinder -->
			<div class="form-group col-md-12">
				<label for="introduce">Giới thiệu</label>
				<textarea name="introduce" id="introduce"  class="form-control" >{{$theme->introduce}}</textarea>
				
				<script type="text/javascript">
	   	 			CKEDITOR.replace( 'introduce',{
	   	 				filebrowserBrowseUrl: '{{ asset('public/ckeditor/ckfinder/ckfinder.html') }}',
				        filebrowserImageBrowseUrl: '{{ asset('public/ckeditor/ckfinder/ckfinder.html?type=Images') }}',
				        filebrowserFlashBrowseUrl: '{{ asset('public/ckeditor/ckfinder/ckfinder.html?type=Flash') }}',
				        filebrowserUploadUrl: '{{ asset('public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
				        filebrowserImageUploadUrl: '{{ asset('public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
				        filebrowserFlashUploadUrl: '{{ asset('public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
				   		 
	   	 			});
				</script>
			</div>
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-success form-control">Cập nhập</button>
			</div>
		</form>
		</div>
	</section>
</section>
@endsection
