<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Slidehome;

class ThemesController extends Controller
{
    //
    public function getTheme() {
    	$theme = Theme::getTheme();
        $slidehome = new Slidehome;
        $slidehomes = $slidehome::getSlide();
    	return view('admin/theme/editTheme',compact('theme','slidehomes'));
    }

    public function postTheme(Request $request) {
    	$videoUrl = $request->input('videoUrl');
        $introduce = $request->input('introduce');

    	Theme::editTheme($videoUrl, $introduce);


    	return redirect()->back();
    }
}
