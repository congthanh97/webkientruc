<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidehome;
class SlideHomeController extends Controller
{
    //
	public function getAddSlide() {
		return view('admin/theme/addSlideHome');
	}

	public function postAddSlide(Request $request) {
		$number = $request->input('number');
		$image = $request->file('image');
		$caption = $request->input('caption');

		$imageName = time().'_'.$image->getClientOriginalName();
		$image->move('public/img/slideHome', $imageName);

		Slidehome::addSlide($imageName, $caption, $number);

		return redirect('admin/theme');
	}

	public function getEditSlide($id) {
		$slidehome = Slidehome::getSlideById($id);
		return view('admin/theme/editSlideHome', compact('slidehome'));
	}

	public function postEditSlide($id, Request $request) {
		$number = $request->input('number');
		$image = $request->file('image');
		$caption = $request->input('caption');

		if($image!=null){
			$imageName = time().'_'.$image->getClientOriginalName();
			$image->move('public/img/slideHome', $imageName);
			if(file_exists($imageName)){
				unlink('public/img/slideContact/'.$imageName);
			}
		}
		else{
			$imageName = $request->input('image');
		}
		

		Slidehome::editSlide($id, $imageName, $caption, $number);

		return redirect('admin/theme');
	}

	public function deleteSlide($id) {
		Slidehome::deleteSlide($id);
		return redirect()->back();
	}
}
