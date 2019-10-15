@extends('layouts.main')

@section('title', "My Account - Wishlist")
@section('h1title', "My Account - Wishlist")
@section('h1desc', "Information about my wishlist")

@section('content')
<div class="container clearfix">
    <div>
        <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>My Wishlist</h4>
        </div>
        @if(!$productlist->isEmpty())
        <div class="table-responsive">
            <table class="table cart table-bordered">
                <thead>
                    <tr class="trgrey">
                        <th class="cart-product-remove">&nbsp;</th>
                        <th class="cart-product-thumbnail">Image</th>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-name">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productlist as $product)
                    <tr class="cart_item">
                        <td class="cart-product-remove centered">
                            <a href="{{ url('/my-account/wishlist/remove', ['id'=> $product->id]) }}" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                        </td>
                        <td class="cart-product-thumbnail centered">
                            <a href="{{ url('buy', ['slug'=>$product->slug]) }}"><img width="64" height="64" src="{{ URL::asset('/images/products/').'/'.$product->image }}" alt="{{$product->name}}"></a>
                        </td>
                        <td class="cart-product-name">
                            <a href="{{ url('buy', ['slug'=>$product->slug]) }}">{{$product->name}}</a>
                        </td>
                        <td class="cart-product-price">
                            <span class="amount">${{$product->price}}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-warning">
            <i class="icon-warning-sign"></i><strong>Warning!</strong> No products in the wishlist.
        </div>
        @endif
    </div>
</div>
@endsection