<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;

class FacebookController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['facebook_id'] = $user->getId();
            $create['avatar'] = $user->getAvatar();

            $customer = new Customer();
            $customer->name = $create['name'];
            $customer->email = $create['email'];
            $customer->facebook_id = $create['facebook_id'];
            $customer->avatar = $create['avatar'];
            Customer::insert(
                [
                    'name' => $create['name'],
                    'email' => $create['email'],
                    'facebook_id' => $create['facebook_id'],
                    'avatar' => $create['avatar'],
                ]
            );
            dd($customer->name);
            return view('home', compact('customer'));

        } catch (Exception $e) {

            return redirect('auth/facebook');

        }
    }
}
