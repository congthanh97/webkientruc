<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slidehome extends Model
{
    //
    protected $table = 'slidehome';
    public $timestamps = true;

    public static function getSlide (){
    	return self::select('*')->orderBy('number')->get();
    }

    public static function getSlideById($id) {
    	return self::where('id', $id)->first();
    }

    public static function editSlide($id, $image, $caption, $number) {
    	self::where('id', $id)->update([
    		'image'=>$image,
    		'caption'=>$caption,
    		'number'=>$number
    	]);
    }

    public static function addSlide($image, $caption, $number) {
    	self::insert([
    		'image'=>$image,
    		'caption'=>$caption,
    		'number'=>$number
    	]);
    }

    public static function deleteSlide($id) {
        self::where('id', $id)->delete();
    }
}
