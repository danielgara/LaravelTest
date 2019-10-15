<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CartN;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->cart = new CartN();
    }

    public function showLinkRequestForm(){
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Forgot Password","forgot",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();
        return view('auth.passwords.email')->with($data);
    }
}
