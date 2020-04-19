@extends('admin/index')
@section('content')
<!-- main-heading -->

<h2 class="main-title-w3layouts mb-2 text-center">Danh mục</h2>
<!--// main-heading -->
<section class="content">

	@if(session('alert'))
	<div class="alert alert-danger" style="margin: 10px 0px;">{{session('alert')}}</div>
	@endif

	<div class="row" style="margin: 0px;">
		<div id="add-cate" class="col-md-5">
			<form method="post" action="{{url('admin/addCate')}}">
				@csrf
				<div class="row">
					<input type="text" name="cateName" placeholder="Nhập tên danh mục" class="form-control col-md-9" required="">
					<button class="btn btn-success col-md-3 form-control">Thêm</button>
				</div>
			</form>
		</div>
		<div class="col-md-6" id="cate-list" >
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Tên danh mục</th>
						<th scope="col">Trạng thái</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 1; ?>
					@foreach($cates as $cate)
					<tr>
						<td scope="row">{{$stt}}</td>
						<td>{{$cate->cateName}}</td>
						<td>
							@if($cate->status==1)
							<span class="label label-success">{{'Hoạt động'}}</span>
							@elseif($cate->status==0)
							<span class="label label-danger">{{'Không hoạt động'}}</span>
							@endif
						</td>
						<td>
							<!-- edit -->
	                        <a href data-id="{{$cate->id}}" class="icon-edit" data-toggle="modal" data-target="#editCate" data-id="{{$cate->id}}" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	                        <!-- delete -->
	                        <a href="{{url('admin/deletecate/'.$cate->id)}}" class="icon-delete" onclick="return confirm('Bạn có muốn xóa không?');" ><i class="fa fa-trash" aria-hidden="true"></i></a>
	                    </td>
					</tr>
					<?php $stt++; ?>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="editCate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	
    </div>
  </div>
</div>

<script>
	$(document).ready(function() {

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		var url;
		var id;
		$('.icon-edit').click(function(event) {
			event.preventDefault();
			id = $(this).data('id');
			// console.log(id);
			url = 'editcate/';
			$.ajax({
				url: url + id,
				type: 'GET',
			})
			.done(function(res) {
				$('.modal-content').html(res);
			})
		});
	});
</script>
@endsection

