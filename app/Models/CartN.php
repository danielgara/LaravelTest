<?php

namespace App\Models;
use Anam\Phpcart\Cart;
use Illuminate\Support\Facades\Session;

class CartN extends Cart
{
    protected $coupon;

    public function setCouponD($code,$discount)
    {
        if (empty($code)) {
            throw new InvalidArgumentException('Cart coupon code can not be empty.');
        }

        $this->coupon['code']=$code;
        $this->coupon['discount']=$discount;

        Session::put($this->getCart()."c", $this->coupon);
    }

    public function setCouponF($code,$fixed)
    {
        if (empty($code)) {
            throw new InvalidArgumentException('Cart coupon code can not be empty.');
        }

        $this->coupon['code']=$code;
        $this->coupon['fixed']=$fixed;

        //Session::put($this->getCart(), $items);
    }

    public function getCoupon()
    {
        return Session::get($this->getCart()."c");
    }

    public function removeCoupon()
    {
        Session::forget($this->getCart()."c");
    }

    public function getDiscount()
    {
        $items = $this->getItems();

        $sum = $items->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $coupon = $this->getCoupon();
        $discount = 0;
        if(empty($coupon)){
            return 0;
        }else{
            if(!empty($coupon['discount'])){
                $discount = round($sum*$coupon['discount']/100);
            }
        }

        return $discount;
    }

    public function getTotalWithCoupon()
    {
        $items = $this->getItems();

        $sum = $items->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $coupon = $this->getCoupon();
        if(empty($coupon)){
            return $sum;
        }else{
            if(!empty($coupon['discount'])){
                $discount = round($sum*$coupon['discount']/100);
                $sum=$sum-$discount;
            }
        }

        return $sum;
    }
}