<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showindex(){
        return view('front_end.page.home.home');
    }
}
