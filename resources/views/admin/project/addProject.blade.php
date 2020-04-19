@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Thêm Dự án</h2>
<!--// main-heading -->
<section class="content">
	<section>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form method="post" enctype="multipart/form-data" class="row">
			@csrf	
			<div class="form-group col-md-6">
				<label for="projectName">Danh mục</label>
				<select name="cateId" id="cateId" class="form-control">
					<!-- categories -->
					@foreach($cates as $cate)
					<option value="{{$cate->id}}">{{$cate->cateName}}</option>
					@endforeach
					<!--  -->
				</select>
			</div>

			<div class="form-group col-md-6">
				<label for="projectName">Tên dự án</label>
				<input type="text" name="projectName" class="form-control" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="featureImage">Ảnh bìa</label>
				<input type="file" name="featureImage" class="form-control" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="videoUrl">VideoUrl</label>
				<input type="text" id="videoUrl" name="videoUrl" class="form-control" disabled="">
			</div>
			<div class="form-group col-md-6">
				<label for="architect">Kiến trúc sư</label>
				<input type="text" name="architect" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="surface">Diện tích (m²)</label>
				<input type="text" name="surface" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="placement">Địa điểm</label>
				<input type="text" name="placement" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="year">Năm</label>
				<input type="text" name="year" class="form-control">
			</div>

			<!-- ckeditor & ckfinder -->
    		<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    		<script src="{{asset('public/ckeditor/ckfinder/ckfinder.js')}}"></script>
    		<!-- ckeditor & ckfinder -->
			<div class="form-group col-md-12">
				<label for="projectContent">Content</label>
				<textarea name="projectContent" id="projectContent"  class="form-control" ></textarea>
				
				<script type="text/javascript">
	   	 			CKEDITOR.replace( 'projectContent',{
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
				<button type="submit" class="btn btn-success form-control">Thêm dự án</button>
			</div>
		</form>
	</section>
</section>
<script>
	$(document).ready(function() {
		$('#cateId').click(function(event) {
			/* Act on the event */
			var val = $('#cateId').val();
			if(val==4) {
				$('#videoUrl').removeAttr('disabled');
			}
			else {
				$('#videoUrl').attr({
					disabled: ''
				});
			}
		});
	});
</script>
@endsection