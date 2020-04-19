<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    //
    public function admin() {
        return view('admin/index');
    }

    public function getContact (){
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
    	$contact::editContact($email, $mobile, $address, $aboutUs, $maxim, $link_fb,$link_ytb);
    	return redirect()->back();
    }
}
