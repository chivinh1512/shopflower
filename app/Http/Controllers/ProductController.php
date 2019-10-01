<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function showproducts($id){
        $listproduct=Product::where('id_cate',$id)->get();
        $categories=Category::all();
        return view('front_end.page.products.products',compact('listproduct','categories'));
    }
    public function showproductdetail($id){
           $productdetail=Product::find($id);
           $categories= $productdetail->id_cate;
           $groupproduct = Product::where('id_cate', $categories)->orderby('id', 'desc') ->limit(5)->get();
        return view('front_end.page.products.productdetail',compact('productdetail','groupproduct'));
    }
}
