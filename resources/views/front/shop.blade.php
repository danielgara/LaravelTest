@extends('layouts.main')

@section('title', "Shop suits for men, men's suits, boots men's")
@section('h1title', 'Shop')
@section('h1desc', 'Best suits in US')
@section('meta_desc', "Shop men's suits, party suits, and dress shirts at affordable prices. Suitusa has the latest fashion trends on women's and mens clothing.")
@section('meta_key', "Suits men's, Mens suits online, Suit separates, Calvin klein tuxedos, Discount suits, Slim fit suits, Seersucker suits, Overcoat, Blazer, Big &Tall suits")


@section('content')
<!-- Shop
============================================= -->
<div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">

@foreach ($productlist as $product)
<div class="product clearfix">
  <div class="product-image">
    <div class="fslider" data-arrows="false">
      <a href="{{ url('buy', ['slug'=>$product->slug]) }}"><img src="{{ URL::asset('/images/products/').'/'.$product['image'] }}" alt="{{ $product['name'] }}"></a>
    </div>
    <div class="product-overlay">
      <a href="{{ url('buy', ['slug'=>$product->slug]) }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
      <a href="{{ url('buy', ['slug'=>$product->slug]) }}" class="item-quick-view"><i class="icon-zoom-in2"></i><span> View</span></a>
    </div>
  </div>
  <div class="product-desc">
    <div class="product-title"><a href="#">{{ $product['name'] }}</a></div>
    <div class="product-price">${{ $product['price'] }}</div>
  </div>
</div>
@endforeach

</div><!-- #shop end -->
            
@endsection