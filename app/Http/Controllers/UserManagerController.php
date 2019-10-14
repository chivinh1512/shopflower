<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserManagerController extends Controller
{
    public function showusers(){
        $datausers['datausers']=User::paginate(8);
        return view('admin.usermanager',$datausers);
    }
}
