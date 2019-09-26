<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function showcart(){
        return view('shoppingcart');
    }
}
