<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $req){
        $products = Product::where('name','like','%'.$req->key.'%')
            ->orWhere('price',$req->key)
            ->get();
        return view('front_end.page.products.search',compact('products', 'name'));
    }
}
