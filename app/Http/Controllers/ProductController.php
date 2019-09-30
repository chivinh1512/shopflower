<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showproducts(){
        return view('front_end.page.products.products');
    }
    public function showproductdetail(){
        return view('front_end.page.products.productdetail');
    }
}
