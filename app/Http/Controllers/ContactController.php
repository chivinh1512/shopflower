<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('front_end.page.contact.contact');
    }
    public function postcontact(Request $request){
        $newcontact = new Contact();
        $newcontact->name = $request->name;
        $newcontact->phone = $request->phone;
        $newcontact->email = $request->email;
        $newcontact->subject = $request->subject;
        $newcontact->message = $request->message;
        $newcontact->save();
        return back()->with('sent','Cảm ơn phản hồi của bạn');;
    }
}
