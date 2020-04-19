<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Slidecontact;

class ContactController extends Controller
{
    //
    public function getAdminContact (){
    	$contact = new Contact;
    	$cont = $contact::getContact();
    	return view('admin/contact/contact', compact('cont'));
    }
 
    public function postContact (Request $request){
    	$contact = new Contact;
    	$email = $request->email;
    	$mobile = $request->mobile;
    	$address = $request->address;
    	$aboutUs = $request->aboutUs;
        $maxim = $request->maxim;
        $link_fb = $request->link_fb;
        $link_ytb = $request->link_ytb;
        $videoUrl = $request->videoUrl;

    	$contact::editContact($email, $mobile, $address, $aboutUs, $maxim, $link_fb, $link_ytb, $videoUrl);
    	return redirect()->back();
    }

    public function getContact() {
    	$contact = new Contact;
        $slidecontacts = Slidecontact::getSlide();
    	$cont = $contact::getContact();
    	return view('contact', compact('cont', 'slidecontacts'));
    }
}
