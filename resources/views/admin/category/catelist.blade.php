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
                <a href="{{url('admin/editcate/'.$cate->id)}}" class="icon-edit" data-toggle="modal" data-target="#editCate" data-id="{{$cate->id}}" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                <!-- delete -->
                <a href="{{url('admin/deletecate/'.$cate->id)}}" class="icon-delete"  ><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
		</tr>
		<?php $stt++; ?>
		@endforeach
	</tbody>
</table>
