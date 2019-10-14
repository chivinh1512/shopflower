<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactManagerController extends Controller
{
    public function showcontacts(){
        $datacontacts=Contact::all();
        return view('admin.contactmanager',compact('datacontacts'));
    }
    public function delete($id){
        Contact::destroy($id);
        return back();
    }
}
