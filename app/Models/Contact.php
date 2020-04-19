<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    //
    protected $table = 'contact';
    public $timestamps = true;

    public static function getContact() {
    	return self::where('id',1)->first();
    }

    public static function editContact($email, $mobile, $address, $aboutUs, $maxim, $link_fb, $link_ytb, $videoUrl) {
    	self::where('id',1)->update([
    			'email'=>$email,
    			'mobile'=>$mobile,
    			'address'=>$address,
    			'aboutUs'=>$aboutUs,
                'maxim'=>$maxim,
                'link_fb'=>$link_fb,
                'link_ytb'=>$link_ytb,
                'videoUrl'=>$videoUrl
    	]);
    }
}
