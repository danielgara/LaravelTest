@extends('layouts.main')

@section('title', $product->name)
@section('h1title', $product->name)
@section('h1desc', 'Product information')

@section('content')
<div class="content-wrap">
<div class="container clearfix">
    <div class="single-product">
        <div class="product">
            <div class="col_two_fifth">

                <!-- Product Single - Gallery
                ============================================= -->
                <div class="product-image">
                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                        <div class="flexslider">
                            <div class="slider-wrap" data-lightbox="gallery">
                                <div class="slide" data-thumb="{{ URL::asset('/images/products/').'/'.$product->image }}"><a href="{{ URL::asset('/images/products/').'/'.$product->image }}" title="{{ $product->name }}" data-lightbox="gallery-item"><img src="{{ URL::asset('/images/products/').'/'.$product->image }}" alt="{{ $product->name }}"></a></div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="sale-flash">Sale!</div>-->
                </div><!-- Product Single - Gallery End -->

            </div>

            <!--<div class="col_one_fifth col_last">

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-thumbs-up2"></i>
                    </div>
                    <h3>100% Original</h3>
                    <p class="notopmargin">We guarantee you the sale of Original Brands.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-credit-cards"></i>
                    </div>
                    <h3>Payment Options</h3>
                    <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-truck2"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-undo"></i>
                    </div>
                    <h3>30-Days Returns</h3>
                    <p class="notopmargin">Return or exchange items purchased within 30 days.</p>
                </div>

            </div>-->

            <div class="col_three_fifth product-desc col_last">
                <!-- Product Single - Price
                ============================================= -->
                <div class="product-price">${{$product->price}}</div>
                <div class="feature-box fbox-rounded fbox-effect custom-box">
                @guest
                <div class="fbox-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login to Sync your Wishlist">
                    <a href="{{ route('login') }}"><i class="icon-heart i-alt"></i></a>
                </div>
                @else
                <div class="fbox-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to my Wishlist">
                    <a href="{{ url('my-account/wishlist/add', ['id'=>$product->id]) }}"><i class="icon-heart i-alt"></i></a>
                </div>
                @endguest
                </div>
                <!-- Product Single - Price End -->
                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Quantity & Cart Button
                ============================================= -->
                <form class="cart nobottommargin clearfix" action="{{route('cartadd')}}" method="post">
                    @csrf
                    <div class="quantity clearfix">
                        <select required id="color" name="color" class="form-control">
                    @if(count($product->color)==1)
                        @foreach ($product->color as $color)
                            <option value="{{$color}}">{{$color}}</option>
                        @endforeach
                    @else
                        <option  disabled selected value="">Select Color</option>
                        @foreach ($product->color as $color)
                            <option value="{{$color}}">{{$color}}</option>
                        @endforeach
                    @endif
                        </select>
                    </div>
                    <div class="quantity clearfix">
                        <select required id="size" name="size" class="form-control">
                        <option disabled selected value="">Select Size</option>
                        @foreach ($product->size as $size)
                            <option value="{{$size}}">{{$size}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="quantity clearfix">
                        <input type="button" value="-" class="minus">
                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                        <input type="button" value="+" class="plus">
                    </div>
                    <input type="hidden" name="pid" value="{{$product->id}}" />
                    <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                </form><!-- Product Single - Quantity & Cart Button End -->

                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Short Description
                ============================================= -->
                <p class="justified">{{$product->description}}</p>

                <!-- Product Single - Meta
                ============================================= -->
                <div class="card product-meta">
                    <div class="card-body">
                        <span itemprop="productID" class="sku_wrapper">Product ID: <span class="sku">{{ $product->id }}</span></span>
                        <span class="posted_in"><br />Category: <a href="{{ url('mens', ['slug'=>$cat->slug]) }}" rel="tag">{{ $cat->name}}</a></span>
                    </div>
                </div><!-- Product Single - Meta End -->

                <!-- Product Single - Share
                ============================================= -->
                <div class="si-share noborder clearfix">
                    <span>Share:</span>
                    <div>
                        <a href="#" class="social-icon si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-email3">
                            <i class="icon-email3"></i>
                            <i class="icon-email3"></i>
                        </a>
                    </div>
                </div><!-- Product Single - Share End -->

            </div>

            <div class="col_full nobottommargin">

                <div class="tabs clearfix nobottommargin" id="tab-1">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Additional Information</span></a></li>
                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tabs-1">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="tab-content clearfix" id="tabs-2">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Size</td>
                                        <td>{{ join(', ', $product->size) }} </td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>{{ join(', ', $product->color) }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

                <div class="line"></div>

                <div class="col_one_third nobottommargin">
                    <a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="{{ URL::asset('images/suitusa-logo.jpg') }}" alt="SuitUSA Logo"></a>
                </div>

                <div class="col_two_third col_last nobottommargin">

                    <div class="col_half">

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-thumbs-up2"></i>
                            </div>
                            <h3>100% Original Brands</h3>
                            <p class="notopmargin">We guarantee you the sale of Original Brands with warranties.</p>
                        </div>

                    </div>

                    <div class="col_half col_last">

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-credit-cards"></i>
                            </div>
                            <h3>Lots of Payment Options</h3>
                            <p class="notopmargin">We accept Visa, MasterCard and American Express &amp; of-course PayPal.</p>
                        </div>

                    </div>

                    <div class="col_half nobottommargin">

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-truck2"></i>
                            </div>
                            <h3>Free Express Shipping</h3>
                            <p class="notopmargin">Free Delivery to 100+ Locations Worldwide on orders above $40.</p>
                        </div>

                    </div>

                    <div class="col_half col_last nobottommargin">

                        <div class="feature-box fbox-plain fbox-dark fbox-small">
                            <div class="fbox-icon">
                                <i class="icon-undo"></i>
                            </div>
                            <h3>30-Days Returns Policy</h3>
                            <p class="notopmargin">Return or exchange items purchased within 30 days for Free.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="clear"></div>
</div>
</div>
@endsection