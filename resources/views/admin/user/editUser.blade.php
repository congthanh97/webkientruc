@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Thêm thành viên</h2>
<!--// main-heading -->

<section class="content">
	<section>
		<form method="post" enctype="multipart/form-data" class="row">
			@csrf
			<div class="form-group col-md-6">
				<label for="username">Tên đăng nhập</label>
				<input type="text" name="username" class="form-control" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="password">Mật khẩu</label>
				<input type="text" name="password" class="form-control" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="avatar">Avatar</label>
				<input type="file" name="avatar" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="fullname">Họ tên</label>
				<input type="text" name="fullname" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="mobile">Số điện thoại</label>
				<input type="text" name="mobile" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="role">Quyền</label>
				<select name="role" >
					<option value="1">cộng tác viên</option>
					<option value="2">admin</option>
				</select>
			</div>
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-success form-control">Thêm thành viên</button>
			</div>
		</form>
	</section>
</section>

@endsection