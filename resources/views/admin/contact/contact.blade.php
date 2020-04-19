@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Liên hệ</h2>
<!--// main-heading -->
<section class="content">

		<section>
		<form method="post" enctype="multipart/form-data" class="row">
			@csrf
			<div class="form-group row col-md-12">
				<label for="email" class="col-md-3">Email</label>
				<input type="email" name="email" value="{{$cont->email}}" class="col-md-9 form-control" >
			</div>
			<div class="form-group row col-md-12">
				<label for="mobile" class="col-md-3">Hotline</label>
				<input type="text" name="mobile" value="{{$cont->mobile}}" class="col-md-9 form-control">
			</div>
			<div class="form-group row col-md-12">
				<label for="address" class="col-md-3">address</label>
				<input type="text" name="address" value="{{$cont->address}}" class="col-md-9 form-control">
			</div>
			<div class="form-group row col-md-12">
				<label for="maxim" class="col-md-3">maxim</label>
				<input type="text" name="maxim" value="{{$cont->maxim}}" class="col-md-9 form-control">
			</div>
			<div class="form-group row col-md-12">
				<label for="link_fb" class="col-md-3">Link_fb</label>
				<input type="text" name="link_fb" value="{{$cont->link_fb}}" class="col-md-9 form-control">
			</div>
			<div class="form-group row col-md-12">
				<label for="link_ytb" class="col-md-3">Link_ytb</label>
				<input type="text" name="link_ytb" value="{{$cont->link_ytb}}" class="col-md-9 form-control">
			</div>
			<div class="form-group col-md-12">
				<label for="videoUrl" class="col-md-3">Video trang contact </label>
				<input type="text" name="videoUrl" value="{{$cont->videoUrl}}" class="col-md-9 form-control">
			</div>
			<!-- ckeditor & ckfinder -->
    		<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    		<script src="{{asset('public/ckeditor/ckfinder/ckfinder.js')}}"></script>
    		<!-- ckeditor & ckfinder -->

			<div class="form-group col-md-12 row">
				<label for="aboutUs">Về chúng tôi</label>
				<textarea name="aboutUs" id="aboutUs"  class="form-control" >{{$cont->aboutUs}}</textarea>
				
				<script type="text/javascript">
	   	 			CKEDITOR.replace( 'aboutUs',{
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
