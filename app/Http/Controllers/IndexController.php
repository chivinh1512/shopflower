<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showindex(){
        $categories = Category::all();
        $bohoatuoi = Product::where('id_cate', 1)->orderby('id', 'desc') ->limit(5)->get();
        $giohoatuoi = Product::where('id_cate', 2)->orderby('id', 'desc') ->limit(5)->get();
        return view('front_end.page.home.home',compact('categories', 'bohoatuoi', 'giohoatuoi'));
    }
}
