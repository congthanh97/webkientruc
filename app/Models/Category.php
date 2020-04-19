<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories" ;
    public $timestamps = true;
    
    //get all category
    public function projects(){
        return $this->hasMany('App/Models/Project');
    }

    public static function getCategories() {
    	return self::select('*')->get(); 	
    }
    
    //get categories active
    public static function getCateActive() {
    	return self::where('status', 1)->get();
    }

    //select cate by id
    public static function getCateById($id) {
        return self::where('id', $id)->first();
    }


    //select cate by name
    public static function getCateByName($cateName) {
        return self::where('cateName', $cateName)->first();
    }

    public static function getCateByNameDifId($id,$cateName) {
        return self::where('cateName', $cateName)->where('id','!=',$id)->first();
    }


    public static function addCate($cateName) {
        self::insert([
            'cateName'=>$cateName
        ]);
    }


    public static function deleteCate($id) {
        self::where('id', $id)->delete();
    }

    public static function editCate($id, $cateName, $status) {
        self::where('id', $id)->update([
                'cateName'=>$cateName,
                'status'=>$status
            ]);
    }
}
