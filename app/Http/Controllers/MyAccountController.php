<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CartN;
use App\Models\Product;
use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    public function __construct(Request $request){
        $this->middleware('auth');
		$this->cart = new CartN();
    }

    // view myaccount
    public function index()
    {
        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("My Account","myaccount",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['cartcount']=$this->cart->count();
        $data['sidebar']="myaccount";

        return view('myaccount.index')->with($data);
    }

    public function wishlistremove($id)
    {
        $user = User::findOrFail(Auth::user()->id);
        $wishlist = $user->wishlist;

        if (($key = array_search($id, $wishlist)) !== false) {
            unset($wishlist[$key]);
            $user->wishlist = $wishlist;
            $user->update([
                'wishlist' => $wishlist
             ]);
        }

        return redirect()->route('myaccountwishlist');
    }

    public function wishlistadd($id)
    {
        $user = User::findOrFail(Auth::user()->id);
        $wishlist = $user->wishlist;

        if (($key = array_search($id, $wishlist)) === false) {
            $wishlist[]=$id;
            $user->wishlist = $wishlist;
            $user->update([
                'wishlist' => $wishlist
             ]);
        }

        return redirect()->route('myaccountwishlist');
    }

    public function wishlist()
    {
        $user = Auth::user();

        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("My Account","myaccount",null,"0");
        $breadlist[2]=array("Wishlist","wishlist",null,"1");

        $productlist = Product::whereIn('id', $user->wishlist)->get(); 

        $data=array();
        $data['breadlist']=$breadlist;
        $data['productlist']=$productlist;
        $data['cartcount']=$this->cart->count();
        $data['sidebar']="myaccount";

        return view('myaccount.wishlist')->with($data);
    }
}