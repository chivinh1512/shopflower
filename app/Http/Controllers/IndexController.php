<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function showindex(){
        $categories = Category::orderBy('id')->skip(0)->take(4)->get();
        $abc = [];
        foreach ($categories as $key => $value) {
            $id_cate = $value['id'];
            $name_cate = $value['name'];
            $products = DB::table('products')->where('id_cate', $id_cate)->orderBy('id','desc')->limit(4)->get();
            $abc[$name_cate] = $products;
        }
        return view('front_end.page.home.home',compact('categories','abc' ));
    }
}
