<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductManagerController extends Controller
{
    public function showproducts(){
        $dataproduct['dataproduct']= product::orderBy('id','desc')
            ->paginate(8);
        $datacategory['datacategory']= category::all();
        return view('admin.productmanager',$dataproduct,$datacategory);
    }
    public function delete($id){
        Product::destroy($id);
        return back();
    }
    public function postproducts(Request $request){
        $postproduct = new product();
        $postproduct->name = $request->name;
        $postproduct->price = $request->price;
        $postproduct->img = $request->img;
        $postproduct->id_cate = $request->id_cate;
        $postproduct->detail = $request->detail;
        $postproduct->save();
        return back();
    }
    public function geteditproduct($id){
        $data['product'] = Product::find($id);
        return view('admin.updateproduct',$data);
    }
    public function postedit(Request $request,$id) {
        $newproduct = Product::find($id);
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        if($request->img!=null) {
            $newproduct->img = $request->img;
        }
        $newproduct->detail = $request->detail;
        $newproduct->save();
        return redirect()->intended('admin/productmanager');
    }
}
