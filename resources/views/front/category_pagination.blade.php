<div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">
@foreach ($productlist as $product)
    <div class="product clearfix">
    <div class="product-image">
        <div class="fslider" data-arrows="false">
        <a href="{{ url('buy', ['slug'=>$product->slug]) }}"><img src="{{ URL::asset('/images/products/').'/'.$product['image'] }}" alt="{{ $product['name'] }}"></a>
        </div>
        <div class="product-overlay">
        <a href="{{ url('buy', ['slug'=>$product->slug]) }}" class="item-quick-view"><i class="icon-zoom-in2"></i><span> View</span></a>
        </div>
    </div>
    <div class="product-desc">
        <div class="product-title"><a href="{{ url('buy', ['slug'=>$product->slug]) }}">{{ $product['name'] }}</a></div>
        <div class="product-price">${{ $product['price'] }}</div>
    </div>
    </div>
@endforeach
</div>
<div class="clearfix">{{ $productlist->links() }}</div>
@if(empty($firstTime))
<script>gridInit($('.grid-container'));</script>
@endif