<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\CartN;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct(Request $request){
		$this->cart = new CartN();
    }

    public function index()
    {
        $categorylist = Category::all();

        $breadlist=array();
        $breadlist[0]=array("Home","home",null,"0");
        $breadlist[1]=array("My Cart","cart",null,"1");

        $data=array();
        $data['breadlist']=$breadlist;
        $data['categorylist']=$categorylist;
        $data['cartinfo']=$this->cart;
        $data['cartcoupon']=$this->cart->getCoupon();
        $data['cartcount']=$this->cart->count();
        $data['sidebar']="shop";

        return view('cart.index')->with($data);
    }

    public function remove($id){
        $this->cart->remove($id);
        return redirect()->route('cart');
    }

    public function update($id,$qty){
        $this->cart->updateQty($id,$qty);
        return redirect()->route('cart');
    }

    public function applyCoupon(Request $request){
        $data = $request->all();
        $code = $data["code"];

        $coupon = Coupon::where('code',$code)->first();

        if(!empty($coupon)){
            if(!empty($coupon->fixed_value)){
                $this->cart->setCouponF($data["code"],$coupon->fixed_value);
            }else{
                $this->cart->setCouponD($data["code"],$coupon->discount);
            }
        }

        return redirect()->route('cart');
    }

    public function removeCoupon(){
        $this->cart->removeCoupon();
        return redirect()->route('cart');
    }
    
    public function add(Request $request){
        $data = $request->all();
		if($data){
            $product = Product::find($data["pid"]);
            if($product){
                $this->cart->add([
                    'id'       => $data["pid"],
                    'name'     => $product->name,
                    'quantity' => $data["quantity"],
                    'price'    => $product->price,
                    'img'    => $product->image,
                    'slug'    => $product->slug,
                    'size'    => $data["size"],
                    'color'    => $data["color"],
                ]);
            }
        }
        return redirect()->route('cart');
    }
}