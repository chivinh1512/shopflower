<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showproducts(){
        return view('products');
    }
    public function showproductdetail(){
        return view('productdetail');
    }
}
