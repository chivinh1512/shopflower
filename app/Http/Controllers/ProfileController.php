<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Bill;
use App\Billdetail;

class ProfileController extends Controller
{
    public function profile(){
        $facebook_id = Auth::user()->facebook_id;
        $bill1=Bill::where('facebook_id', $facebook_id)->where('status','1')->get();
        $bill2=Bill::where('facebook_id', $facebook_id)->where('status','2')->get();
        $bill3=Bill::where('facebook_id', $facebook_id)->where('status','3')->get();
        $bill4=Bill::where('facebook_id', $facebook_id)->where('status','4')->get();
        $stt1=count($bill1);
        $stt2=count($bill2);
        $stt3=count($bill3);
        $stt4=count($bill4);
        return view('front_end.page.profile.profile',compact('stt1','stt2','stt3','stt4'));
    }
    public function showprofile(){
        return view('front_end.page.profile.showprofile');
    }
    public function posteditprofile(Request $request){
        $id = Auth::user()->id;
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
        $facebook_id = Auth::user()->facebook_id;
        $bill= Bill::where('facebook_id', $facebook_id)->where('status','1')->get();
        return view('front_end.page.profile.showhistorybill1',compact('bill'));
    }
    public function show2(){
        $facebook_id = Auth::user()->facebook_id;
        $bill= Bill::where('facebook_id', $facebook_id)->where('status','2')->get();
        return view('front_end.page.profile.showhistorybill2',compact('bill'));
    }
    public function show3(){
        $facebook_id = Auth::user()->facebook_id;
        $bill= Bill::where('facebook_id', $facebook_id)->where('status','3')->get();
        return view('front_end.page.profile.showhistorybill3',compact('bill'));
    }
    public function show4(){
        $facebook_id = Auth::user()->facebook_id;
        $bill= Bill::where('facebook_id', $facebook_id)->where('status','4')->get();
        return view('front_end.page.profile.showhistorybill4',compact('bill'));
    }
    public function showbilldetail($id){
        $billdetail = Billdetail::where('idbill', $id)->get();

        $sttbill = Bill::find($id);
            $stt=$sttbill->status;
        foreach ($billdetail as $key => $value){
            $idproduct=$value['idproduct'];
            $nameproduct = Product::find($idproduct)->name;
            $billdetail[$key]['nameproduct']=$nameproduct;
        }
        return view('front_end.page.profile.showbilldetail',compact('billdetail','id','stt'));
    }
    public function editbill($id){
        $statusbill = Bill::find($id);
        $statusbill->status = '4';
        $statusbill->save();
        return redirect('historybill/1');
    }
}
