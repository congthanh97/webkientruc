<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidecontact;
class SlideContactController extends Controller
{
    //
	public function getAdminSlideContact() {
		$slidecontacts = Slidecontact::getSlide();
		return view('admin/contact/slideContact', compact('slidecontacts'));
	}

	public function getAddSlide() {
		return view('admin/contact/addSlideContact');
	}

	public function postAddSlide(Request $request) {
		$number = $request->input('number');
		$image = $request->file('image');
		$caption = $request->input('caption');

		$imageName = time().'_'.$image->getClientOriginalName();
		$image->move('public/img/slideContact', $imageName);

		Slidecontact::addSlide($imageName, $caption, $number);

		return redirect('admin/slideContact');
	}

	public function getEditSlide($id) {
		$slidecontact = Slidecontact::getSlideById($id);
		return view('admin/contact/editSlideContact', compact('slidecontact'));
	}

	public function postEditSlide($id, Request $request) {
		$number = $request->input('number');
		$image = $request->file('image');
		$caption = $request->input('caption');

		if($image!=null){
			$imageName = time().'_'.$image->getClientOriginalName();
			$image->move('public/img/slideContact', $imageName);	
			if(file_exists($imageName)){
				unlink('public/img/slideContact/'.$imageName);
			}
		}
		else{
			$imageName = $request->input('image');
		}
		

		SlideContact::editSlide($id, $imageName, $caption, $number);

		return redirect('admin/slideContact');
	}

	public function deleteSlide($id) {
		SlideContact::deleteSlide($id);
		return redirect()->back();
	}
}
