<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\CartN;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

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

    public function showResetForm(Request $request, $token = null){
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Forgot Password","forgot",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();
        $data['token'] = $token;
        $data['email'] = $request->email;
        return view('auth.passwords.reset')->with($data);
    }
}
