@extends('layouts.main')

@section('title', "My Cart")
@section('h1title', "My Cart")
@section('h1desc', "Cart information")

@section('content')
<div class="container clearfix">
    <div class="col_third_third">
        @if(!$cartinfo->getItems()->isEmpty())
        <div class="table-responsive">
            <table class="table cart table-bordered">
                <thead>
                    <tr class="trgrey">
                        <th class="cart-product-remove">&nbsp;</th>
                        <th class="cart-product-thumbnail">&nbsp;</th>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-name">Color/Size</th>
                        <th class="cart-product-price">Unit Price</th>
                        <th class="cart-product-quantity">Quantity</th>
                        <th class="cart-product-subtotal">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartinfo->getItems() as $cartitem)
                    <tr class="cart_item">
                        <td class="cart-product-remove">
                            <a href="{{ url('/my-cart/remove', ['id'=> $cartitem->id]) }}" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                        </td>
                        <td class="cart-product-thumbnail">
                            <a href="{{ url('buy', ['slug'=>$cartitem->slug]) }}"><img width="64" height="64" src="{{ URL::asset('/images/products/').'/'.$cartitem->img }}" alt="{{$cartitem->name}}"></a>
                        </td>
                        <td class="cart-product-name">
                            <a href="{{ url('buy', ['slug'=>$cartitem->slug]) }}">{{$cartitem->name}}</a>
                        </td>
                        <td class="cart-product-name">
                            Color: {{$cartitem->color}}<br /> Size: {{$cartitem->size}} </a>
                        </td>
                        <td class="cart-product-price">
                            <span class="amount">${{$cartitem->price}}</span>
                        </td>
                        <td class="cart-product-quantity">
                            <div class="quantity clearfix">
                                <input type="button" value="-" onclick="update_cart(-1,{{$cartitem->id}})" class="minus">
                                <input id="qty{{$cartitem->id}}" onchange="update_cart(0,{{$cartitem->id}})" type="text" name="quantity" value="{{$cartitem->quantity}}" class="qty">
                                <input type="button" value="+" onclick="update_cart(+1,{{$cartitem->id}})" class="plus">
                            </div>
                        </td>
                        <td class="cart-product-subtotal">
                            <span class="amount">${{$cartitem->price*$cartitem->quantity}}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        <div class="row clearfix padbot40">
            @if(empty($cartcoupon))
                <div class="col-lg-6 col-6 nopadding">
                    <div class="row">
                        <form class="flex" name="cartcform" action="{{route('cartcoupon')}}" method="post">
                        @csrf
                            <div class="col-lg-8 col-7">
                                <input type="text" name="code" class="sm-form-control" placeholder="Enter Coupon Code.." />
                            </div>
                            <div class="col-lg-4 col-5">
                                <a onclick="document.forms['cartcform'].submit(); return false;" class="button button-3d button-black nomargin">Apply Coupon</a>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="col-lg-6 col-md-6 nopadding">
                <a href="{{route('cartremovecoupon')}}" class="button button-3d button-rounded button-red"><i class="icon-line-cross"></i>Remove Coupon ({{$cartcoupon['code']}})</a>
                </div>
            @endif
            <div class="col-lg-6 col-md-6 nopadding">
                    <a href="#" class="button button-3d notopmargin fright">Proceed to Checkout</a>
            </div>
        </div>

        <script>
        function update_cart(num,id){
            let qtyid="qty"+id;
            let qty= document.getElementById(qtyid).value;
            if(qty==1 && num==-1 || qty<0){
                //nothing
            }else{
                let sum = parseInt(qty)+parseInt(num);
                window.location.href = "{{ url('') }}/my-cart/update/"+id+"/"+sum;
            }
        }
        </script>

        @else
        <div class="alert alert-warning">
            <i class="icon-warning-sign"></i><strong>Warning!</strong> No products in the cart. Go to shop section and add one product to the cart.
        </div>
        @endif
    </div>
</div>

@if(!$cartinfo->getItems()->isEmpty())
<div class="row clearfix">
    <div class="col-lg-6 clearfix">
        <h4>Calculate Shipping</h4>
        <form>
            <div class="col_full">
                <select class="sm-form-control">
                    <option value="CA">Canada</option>
                    <option value="US" selected="selected">United States (US)</option>
                </select>
            </div>
            <div class="col_half">
                <input type="text" class="sm-form-control" placeholder="State / Country">
            </div>

            <div class="col_half col_last">
                <input type="text" class="sm-form-control" placeholder="PostCode / Zip">
            </div>
            <a href="#" class="button button-3d nomargin button-black">Update Totals</a>
        </form>
    </div>

    <div class="col-lg-6 clearfix">
        <h4>Cart Totals</h4>

        <div class="table-responsive">
            <table class="table cart">
                <tbody>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>Cart Subtotal</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">${{$cartinfo->getTotal()}}</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>Shipping</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount">Free Delivery</span>
                        </td>
                    </tr>
                    @if(!empty($cartcoupon))
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>Coupon Discount</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount redfont"><strong>-${{$cartinfo->getDiscount()}}</strong></span>
                        </td>
                    </tr>
                    @endif
                    @if(!empty($cartcoupon))
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>Total</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount color lead"><strong>${{$cartinfo->getTotalWithCoupon()}}</strong></span>
                        </td>
                    </tr>
                    @else
                    <tr class="cart_item">
                        <td class="cart-product-name">
                            <strong>Total</strong>
                        </td>

                        <td class="cart-product-name">
                            <span class="amount color lead"><strong>${{$cartinfo->getTotal()}}</strong></span>
                        </td>
                    </tr>
                    @endif
                </tbody>

            </table>
        </div>
    </div>
</div>
@endif

<!-- coupon capability -->

<div class="modal-on-load enable-cookie" data-target="#myModal1"></div>

<!-- Modal -->
<div class="modal1 mfp-hide" id="myModal1">
    <div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
    <form action="https://mensusa.us11.list-manage.com/subscribe/post?u=cb77dfdad6c46d5aebaf8d445&amp;id=3ff825f3ba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="center" style="padding-top: 30px; padding-bottom: 10px; padding-left: 50px; padding-right: 50px;">
            <h3>Exclusive In-Store Deal</h3>
            <p class="lead nobottommargin">Free Tie or Bowtie with Purchase*<br /><img src="{{ URL::asset('images/other/tie.jpg') }}" style="max-height:150px" /></p>
            <p style="padding-top: 10px;"><b>*Valid at our Los Angeles Store</b><br />
            11517 Santa Monica Blvd, Los Angeles, CA 90025<br />
            <b>Phone number:</b> 1-888-784-8872</p>
           
            <!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
            </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none; width: 100% !important;"></div>
                    <div class="response" id="mce-success-response" style="display:none; width: 100% !important;"></div>
            </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb77dfdad6c46d5aebaf8d445_3ff825f3ba" tabindex="-1" value=""></div>
                </div>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
           
           
           <!-- <input type="text" class="form-control" name="emails" id="emails" placeholder="Enter you email" />-->
        </div>
        <div class="section center nomargin" style="padding: 30px;">
        <input type="submit" id="mc-embedded-subscribe" class="button reds" style="margin: 0 auto !important;" value="Get Your FREE Tie" class="button reds">
            <!--<a href="#" class="button" onClick="$.magnificPopup.close();return false;">Get Your FREE Tie</a><br />-->
            <a href="#" onClick="$.magnificPopup.close();return false;">No thanks, I will pay the full price</a>
        </div>
    </form>    
    </div>
</div>

<script>
$( document ).ready(function() {
    var addEvent = function(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        }
        else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    };

    addEvent(document, "mouseout", function(event) {
        event = event ? event : window.event;
        var from = event.relatedTarget || event.toElement;
        if ( (!from || from.nodeName == "HTML") && event.clientY <= 100 ) {
            execute_modal();
        }
    });
});

function execute_modal(){
    var $modal = $('.modal-on-load:not(.customjs)');
    if( $modal.length > 0 ) {
        $modal.each( function(){
            var element				= $(this),
                elementTarget		= element.attr('data-target'),
                elementTargetValue	= elementTarget.split('#')[1],
                elementDelay		= element.attr('data-delay'),
                elementTimeout		= element.attr('data-timeout'),
                elementAnimateIn	= element.attr('data-animate-in'),
                elementAnimateOut	= element.attr('data-animate-out');

            if( !element.hasClass('enable-cookie') ) { Cookies.remove( elementTargetValue ); }

            if( element.hasClass('enable-cookie') ) {
                var elementCookie = Cookies.get( elementTargetValue );

                if( typeof elementCookie !== 'undefined' && elementCookie == '0' ) {
                    return true;
                }
            }
            $.get("https://ipinfo.io?token=f21d0e8fe097f3", function(response) {
                if(response.city=="Los Angeles" || response.city=="Covina" || response.city=="Itagüí"){
                    if( !elementDelay ) {
                        elementDelay = 100;
                    } else {
                        elementDelay = Number(elementDelay) + 100;
                    }

                    var t = setTimeout(function() {
                        $.magnificPopup.open({
                            items: { src: elementTarget },
                            type: 'inline',
                            mainClass: 'mfp-no-margins mfp-fade',
                            closeBtnInside: false,
                            fixedContentPos: true,
                            removalDelay: 500,
                            callbacks: {
                                open: function(){
                                    if( elementAnimateIn != '' ) {
                                        $(elementTarget).addClass( elementAnimateIn + ' animated' );
                                    }
                                },
                                beforeClose: function(){
                                    if( elementAnimateOut != '' ) {
                                        $(elementTarget).removeClass( elementAnimateIn ).addClass( elementAnimateOut );
                                    }
                                },
                                afterClose: function() {
                                    if( elementAnimateIn != '' || elementAnimateOut != '' ) {
                                        $(elementTarget).removeClass( elementAnimateIn + ' ' + elementAnimateOut + ' animated' );
                                    }
                                    if( element.hasClass('enable-cookie') ) {
                                        Cookies.set( elementTargetValue, '0' );
                                    }
                                }
                            }
                        }, 0);
                    }, Number(elementDelay) );
                }
            }, "jsonp");
        });
    }
}
</script>

@endsection