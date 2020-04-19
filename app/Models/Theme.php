<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $table = 'themes';
    public $timestamps = true;

    public static function getTheme() {
        return self::where('id', 1)->first();
    }

    public static function editTheme($videoUrl, $introduce) {
    	return self::where('id',1)->update([
    		'videoUrl'=>$videoUrl,
            'introduce'=>$introduce
    	]);
    }
}
