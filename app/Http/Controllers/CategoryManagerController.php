<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryManagerController extends Controller
{
    public function showcategories(){
        $data['data']= category::all();
        return view('admin.categorymanager',$data);
    }
    public function delete($id){
        Category::destroy($id);
        return back();
    }
    public function postcategories(Request $request) {
        $postcategory = new category();
        $postcategory->name = $request->name;
        $postcategory->img = $request->img;
        $postcategory->save();
        return back();
    }
    public function geteditcategory($id){
        $data['cate'] = category::find($id);
        return view('admin.updatecategory',$data);
    }
    public function postedit(Request $request,$id) {
        $newcategory = Category::find($id);
        $newcategory->name = $request->name;
        if ($request->img != null) {
            $newcategory->img = $request->img;
        }
        $newcategory->save();
        return redirect()->intended('admin/categorymanager');
    }
}
