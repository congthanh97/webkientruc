@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Sửa slide trang chủ</h2>
<!--// main-heading -->
<section class="content">

		<section>
		<form method="post" enctype="multipart/form-data" class="row">
			@csrf
			<div class="form-group col-md-6">
				<label for="number">Thứ tự ảnh</label>
				<input type="number" name="number" class="form-control" value="{{$slidecontact->number}}" required="" min="1" maxlength="8">
			</div>
			<div class="form-group col-md-6">
				<label for="image">Ảnh bìa</label>
				<img src="{{asset('public/img/slidecontact/'.$slidecontact->image)}}" alt="" width="50%">
				<input type="file" name="image" class="form-control">
				<input type="hidden" name="image" value="{{$slidecontact->image}}">
			</div>
			<!-- ckeditor & ckfinder -->
    		<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    		<script src="{{asset('public/ckeditor/ckfinder/ckfinder.js')}}"></script>
    		<!-- ckeditor & ckfinder -->
			<div class="form-group col-md-12">
				<label for="caption">Caption</label>
				<textarea name="caption" id="caption"  class="form-control" >{{$slidecontact->caption}}</textarea>
				
				<script type="text/javascript">
	   	 			CKEDITOR.replace( 'caption',{
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
	</section>
</section>
@endsection
