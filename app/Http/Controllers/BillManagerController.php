<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Product;
use App\Billdetail;

class BillManagerController extends Controller
{
        public function showbills(){
            $databills= Bill::orderBy('id','desc')
                ->paginate(8);
            return view('admin.billmanager',compact('databills'));
        }
        public function getbilldetail($id){
            $billdetail= billdetail::where('idbill',$id)->get(); /*lay hang du lieu cua bang billdetail theo id*/
            foreach ($billdetail as $key => $value){         /*foreach de lay idproduct*/
                $idproduct=$value['idproduct'];             /*lay dc idproduct*/
                $nameProduct = Product::find($idproduct)->name;
                $billdetail[$key]['nameproduct']=$nameProduct;
            }
            return view('admin.billdetail',compact('billdetail', 'id'));
        }
        public function editstatus($id,$status){
            $newstt = Bill::find($id);
            $newstt->status = $status;
            $newstt->save();
            return redirect()->intended('admin/billmanager');
        }
}
