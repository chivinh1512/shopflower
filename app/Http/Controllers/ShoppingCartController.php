<?php

namespace App\Http\Controllers;
use App\Product;
use App\Bill;
use App\Billdetail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShoppingCartController extends Controller
{
    public function showcart(){
        return view('front_end.page.products.shoppingcart');
    }

    public function addproducttocart($id){
        $check= true;
        $data=Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart)){
            foreach ($cart as $key =>$value){
                if(isset($value[$id])){
                    $cart[$key][$id]['amount']++;
                    session()->put('cart', $cart);
                    $check=false;
                }
            }
        }
        if($check){
            $cart = [
                $data['id'] => [
                    "name" => $data['name'],
                    "amount" =>1,
                    "price" =>$data['price'] ,
                    "img" => $data['img']
                ]
            ];
            Session::push('cart', $cart);
        }
        return redirect()->back()->with('success','Đã thêm vào giỏ hàng');
    }
    public function delproductincart(Request $request){
        $newCart = Session::get('cart');   //lấy ss gán biến newcart
        $stt = $request->get('stt');    // lấy stt(j) gán biến $stt
        unset($newCart[$stt]);
        $request->session()->forget('cart');    //xóa session
        foreach ($newCart as $carts) {
            foreach ($carts as $key => $cart) {
                $data = product::find($key);
                $cart = [
                    $data['id'] => [
                        "name" => $data['name'],
                        "amount" => $cart['amount'],
                        "price" => $data['price'],
                        "img" => $data['img']
                    ]
                ];
                Session::push('cart', $cart);
            };
        }
        return redirect()->back();
    }
    public function postbill(Request $request){

        $bills = Bill::create([
            'facebook_id'=>$request->facebook_id,
            'note'=>$request->note,
            'total'=>$request->totalall,
            'status'=>1,
        ]);
        $idproduct = $request['idproduct'];
        $amount = $request['amount'];
        foreach ($idproduct as $key => $value){
            $billdetail = new billdetail();
            $billdetail->amount = $amount[$key];
            $billdetail->idproduct = $idproduct[$key];
            $billdetail->idbill = $bills['id'];
            $priceproduct = Product::where('id', $idproduct[$key])->value('price');
            $billdetail->price = $priceproduct;
            $billdetail->total = $priceproduct * $amount[$key];
            $billdetail->save();
        }
        $request->session()->forget('cart');
        return back()->with('ordered','Bạn đã đặt hàng thành công');
    }
}
