@extends('admin/index')
@section('content')
<!-- main-heading -->
<h2 class="main-title-w3layouts mb-2 text-center">Thành viên</h2>
<!--// main-heading -->

<!-- Cards content -->
<section class="content">
    <div class="container-fluid">
       <table class="list-project table table-striped table-bordered">
           <thead>
               <tr>
                   <td width="5%">STT</td>
                   <td width="15%">Tên đăng nhập</td>
                   <td width="20%">Họ tên</td>
                   <td width="10%">Email</td>
                   <td width="10%">Số điện thoại</td>
                   <td width="5%">role</td>
                   <td width="10%"></td>
               </tr>
           </thead>
           <tbody>
              @foreach($users as $user)
               <tr>
                   <td>{{$user->id}}</td>
                   <td>{{$user->username}}</td>
                   <td>{{$user->fullname}}</td>
                   <td>{{$user->email}}</td>
                   <td>{{$user->mobile}}</td>
                   <td>{{$user->role}}</td>
                   <td>
                        <!-- edit -->
                        <a href="{{url('admin/editUser/'.$user->id)}}" class="icon-edit" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <!-- delete -->
                        <a href="{{url('admin/deleteUser/'.$user->id)}}" class="icon-delete" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
               </tr>
               @endforeach
           </tbody>
       </table>
    </div>
</section>
@endsection