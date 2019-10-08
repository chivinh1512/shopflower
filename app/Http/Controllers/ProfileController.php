<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Bill;

class ProfileController extends Controller
{
    public function profile(){
        return view('front_end.page.profile.profile');
    }
    public function showprofile(){
        return view('front_end.page.profile.showprofile');
    }
    public function posteditprofile(Request $request){
        $id = \Auth::user()->id;
        $edituser = User::find($id);
        $edituser->name = $request->name;
        $edituser->phone = $request->phone;
        $edituser->email = $request->email;
        $edituser->address = $request->address;
        if($request->avatar!=null) {
            $edituser->avatar = $request->avatar;
        }
        $edituser->save();
        return redirect()->intended('profile/showprofile');
    }
    public function show1(){
        $facebook_id = \Auth::user()->facebook_id;
        $bill= Bill::where('facebook_id', $facebook_id)->get();
        return view('front_end.page.profile.showhistorybill1',compact('bill'));
    }
}
