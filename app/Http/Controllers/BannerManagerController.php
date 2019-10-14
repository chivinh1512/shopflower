<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerManagerController extends Controller
{
    public function showbanners(){
        $dataslides=Banner::all();
        return view('admin.bannermanager',compact('dataslides'));
    }
    public function postbanners(Request $request){
        $postbanner = new Banner();
        $postbanner->img = $request->img;
        $postbanner->save();
        return back();
    }
    public function delete($id){
        Banner::destroy($id);
        return back();
    }
}
