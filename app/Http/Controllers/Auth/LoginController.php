<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\CartN;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->cart = new CartN();
    }

    public function showLoginForm() {
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("Login","login",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['fullwidth']=true;
        $data['cartcount']=$this->cart->count();

        return view('auth.login')->with($data);
     }
}
