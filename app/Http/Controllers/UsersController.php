<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
	public function logOut() {
		session()->forget('UserAdmin');
		return redirect('admin/login');
	}
	public function postLogin(Request $request) {
		$user = new User();
		$username = $request->username;
		$password = $request->password;
		$users = $user::checkLogin($username, $password);
		if($users==null) {
			$alert = "Sai mật khẩu hoặc tài khoản!";
			return redirect()->back()->with('alert', $alert);
		}
		else {
			$roles = $user::findUserByUsername($username);
			session([
				'UserAdmin'=>$username,
				'Role'=>$roles->role
			]);
			return redirect('admin');
		}
	}

	public function getLogin(){
		if(session('UserAdmin')!=null) {
			return redirect('admin');
		}
    	return view('admin/user/login');
    }

	public function getUser() {
		$user = new User();
		$users = $user::getAllUsers();
		return view('admin/user/listUser', compact('users'));
	}

	public function postAddUser(Request $request) {
		$username = $request->username;
		$password = $request->password;
		$fullname = $request->fullname;
		$email = $request->email;
		$mobile = $request->mobile;
		$role = $request->role;
		$user = new User;
		if($user::findUserByUsername($username)!=null) {
			$alert = "Tên đăng nhập đã được sử dụng!";
			return redirect()->back()->with('alert',$alert);
		}
		else {
			$user::addUser($username, $password, $fullname, $email, $mobile, $role);
			return redirect('admin/user');
		}
		
	}

    public function getAddUser() {
    	return view('admin/user/addUser');
    }

    public function getEditUser($id) {
    	$user = User::getUserById($id);
    	return view('admin/user/editUser', compact('user'));
    }

    public function postEditUser($id, Request $request) {
		$password = $request->password;
		$fullname = $request->fullname;
		$email = $request->email;
		$mobile = $request->mobile;
		$role = $request->role;
		$user = new User;
			
		$user::editUser($id, $password, $fullname, $email, $mobile, $role);
		return redirect('admin/user');
    }

    public function deleteUser() {

    }
}
