<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "users";
    public $timestamps = true;

    static public function checkLogin($username, $password) {
        return self::where('username', $username)->where('password', $password)->first();
    }

    static public function getAllUsers (){
    	return self::get();
    }

    static public function getUserById($id){
        return self::where('id',$id)->first();
    }
    static public function findUserByUsername($username) {
    	return self::where('username', $username)->first();
    }
    static public function addUser($username, $password, $fullname, $email, $mobile, $role) {
    	self::insert([
    		'username'=>$username,
    		'password'=>$password,
    		'fullname'=>$fullname,
    		'email'=>$email,
    		'mobile'=>$mobile,
    		'role'=>$role,
    		'created_at'=>date('Y-m-d H:i:s')
    	]);
    }

     static public function editUser($id, $password, $fullname, $email, $mobile, $role) {
        self::where('id', $id)->update([
            'password'=>$password,
            'fullname'=>$fullname,
            'email'=>$email,
            'mobile'=>$mobile,
            'role'=>$role,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
