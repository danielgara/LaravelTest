@extends('layouts.main')

@section('title', "Online boot suits for men, men's suits, boots men's")
@section('h1title', 'SuitUSA')
@section('h1desc', 'Best suits in US')
@section('meta_desc', "We are a complete online store offering superb quality men's suits, party suits, and dress shirts at affordable prices. Suitusa has the latest fashion trends on women's and mens clothing.")
@section('meta_key', "Suits men's, Mens suits online, Suit separates, Calvin klein tuxedos, Discount suits, Slim fit suits, Seersucker suits, Overcoat, Blazer, Big &Tall suits")


@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/ecommerce.css') }}" type="text/css" />
<!-- Content
============================================= -->
<section id="content">

  <a href="{{route('shop')}}">
    <img src="{{ URL::asset('/images/categories/19.jpg')}}" alt="Image 1">
  </a>

  <div class="content-wrap nopadding">

    <div class="section notopmargin nobottommargin" style="padding: 100px 0;">
      <div class="container clearfix">

        <div class="row grid-item clearfix">
          <div class="col-md-2 grid-image">
            <img src="{{ URL::asset('/images/categories/11.jpg')}}" alt="Image 1">
          </div>
          <div class="col-md-2">
            <div class="grid-info clearfix">
              <h3><a href="#">Fresh Arrivals<span>Summer is Coming!</span></a></h3>
              <a href="#" class="more-link clearfix">Shop Now</a>
            </div>
          </div>
          <div class="col-md-2 grid-image">
            <img src="{{ URL::asset('/images/categories/12.jpg')}}" alt="Image 1">
          </div>
          <div class="col-md-2">
            <div class="grid-info clearfix">
              <h3><a href="#">Acessories<span>Check out more Products for your Lifestyles</span></a></h3>
              <a href="#" class="more-link clearfix">Know More</a>
            </div>
          </div>

          <div class="col-md-2 grid-image">
            <img src="{{ URL::asset('/images/categories/13.jpg')}}" alt="Image 1">
          </div>
          <div class="col-md-2">
            <div class="grid-info clearfix">
              <h3><a href="#">Our Store<span>Where we Manufacture!</span></a></h3>
              <i class="icon-map-marker2"></i> <a href="#" data-lightbox="iframe"  class="more-link clearfix">Find Store</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="promo parallax promo-full bottommargin-lg" style="background-image: url('{{ URL::asset('images/parallax/3.jpg')}}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
      <div class="container clearfix">
        <h3>Get <span>30%</span> off on all your orders. Use Coupon: <span>SHOP30</span></h3>
        <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
        <a href="{{route('shop')}}" class="button button-xlarge button-rounded">Start Shopping</a>
      </div>
    </div>

    <div class="container clearfix">

      <div class="heading-block nobottomborder center">
        <h3>Popular Categories</h3>
        <span>Find the most popular categories</span>
      </div>

      <div class="row ecommerce-categories clearfix" style="padding: 20px 0 0;">
        <div class="col-lg-7">
          <a href="{{ url('mens/mens-blazer') }}" style="background: url('{{ URL::asset('/images/categories/1.jpg')}}') no-repeat center center; background-size: cover;">
            <div class="vertical-middle dark center">
              <div class="heading-block nomargin noborder">
                <h3 class="capitalize font-secondary nott t500">Men's Blazers</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-5">
          <a href="{{ url('mens/mens-suits') }}" style="background: url('{{ URL::asset('/images/categories/3.jpg')}}') no-repeat center center; background-size: cover;">
            <div class="vertical-middle dark center">
              <div class="heading-block nomargin noborder">
                <h3 class="capitalize font-secondary nott t500">Men's Suits</h3>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="{{ url('mens/dress-shoes') }}" style="background: url('{{ URL::asset('/images/categories/5.jpg')}}') no-repeat center center; background-size: cover;">
            <div class="vertical-middle dark center">
              <div class="heading-block nomargin noborder">
                <h3 class="capitalize font-secondary nott t500">Dress Shoes</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{ url('mens/coats') }}" style="background: url('{{ URL::asset('/images/categories/6.jpg')}}') no-repeat center center; background-size: cover;">
            <div class="vertical-middle dark center">
              <div class="heading-block nomargin noborder">
                <h3 class="capitalize font-secondary nott t500">Overcoats</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{ url('mens/accessories') }}" style="background: url('{{ URL::asset('/images/categories/8.jpg')}}') no-repeat center center; background-size: cover;">
            <div class="vertical-middle dark center">
              <div class="heading-block nomargin noborder">
                <h3 class="capitalize font-secondary nott t500">Accessories</h3>
              </div>
            </div>
          </a>
        </div>
        
      </div>
    </div>

    <div class="section clearfix nobottommargin"  style="padding: 80px 0;">
      <div class="container clearfix">

        <div class="heading-block nobottomborder center">
          <h3 class="t400" style="font-size: 16px;">Best Selling Products</h3>
        </div>

        <div class="row clearfix">
          @foreach ($productlist as $product)
          <div class="col-lg-3 col-md-6">
            <div class="iportfolio clearfix">
              <div class="portfolio-image clearfix">
                <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                  <div class="flexslider flexsliderg">
                    <div class="slider-wrap">
                      <div class="slide slideg"><a href="{{ url('buy', ['slug'=>$product->slug]) }}"><img src="{{ URL::asset('/images/products/').'/'.$product['image'] }}" alt="{{ $product['name'] }}"></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-desc nobottompadding clearfix">
                <h3 class="col_four_fifth"><a href="{{ url('buy', ['slug'=>$product->slug]) }}">{{ $product->name }}</a></h3>
                <div class="item-price col_one_fifth">
                  <span>${{ $product->price }}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="clear"></div>

    <!-- first row -->
    <div class="container clearfix martop40 bottommargin">
      <div class="heading-block nobottomborder bottommargin center">
        <h3 class="" style="font-size: 20px;">Shop By Color</h3>
      </div>

      <div class="row clearfix clear-bottommargin">
        <div class="col-lg-2 col-md-4 col-6 offset-lg-1">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Black</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/2.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Green</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/3.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Yellow</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/4.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Blue</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/5.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Red</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/6.png') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clear"></div>

    <div class="row align-items-stretch bottommargin clearfix">
      <div class="col-md-6" style="background: url('{{ URL::asset('/images/1.jpg') }}') center 45% no-repeat; background-size: cover; padding: 0 0 500px;">
        <div class="section-content topmargin-sm">
          <h3>Accessories for Men</h3>
          <span class="font-primary">Superior materials for comfort and lasting quality in a complete bedding package.</span>
          <br /><br /><a href="{{route('shop')}}" class="more-link uppercase t500" style="font-family: 'Montserrat';">Go To Shop <i class="icon-line-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6" style="background: url('{{ URL::asset('/images/3.jpg') }}') center center no-repeat; background-size: cover; padding: 0 0 500px;">
        <div class="section-content topmargin-sm">
          <h3>Accessories for Women</h3>
          <span class="font-primary"> Superior materials for comfort and lasting quality in a complete bedding package.</span>
          <br /><br /><a href="{{route('shop')}}" class="more-link uppercase t500" style="font-family: 'Montserrat';">Go To Shop <i class="icon-line-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="clear"></div>

    <!-- first row -->
    <div class="container clearfix">
      <div class="heading-block nobottomborder bottommargin center">
        <h3 class="" style="font-size: 20px;">Shop By Fabric</h3>
      </div>

      <div class="row clearfix clear-bottommargin">
        <div class="col-lg-2 col-md-4 col-6 offset-lg-1">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Seersucker</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/2.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Linen</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/3.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Polyester</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/4.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Jean Denim</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/5.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Wool</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/6.png') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- second row -->
    <div class="container topmargin clearfix">
      <div class="heading-block nobottomborder bottommargin center">
        <h3 class="" style="font-size: 20px;">Shop By Pattern</h3>
      </div>

      <div class="row clearfix clear-bottommargin">
        <div class="col-lg-2 col-md-4 col-6 offset-lg-1">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1"> Paisley Suits</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/2.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Plaid Suits</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/3.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Checker</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/4.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Polk Dots</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/5.png') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="feature-box fbox-center nobottomborder bottommargin">
            <h3 class="t400 ls1">Sequin</h3>
            <div class="fbox-image imagescalein">
              <a href="#"><img src="{{ URL::asset('/images/icons/6.png') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section dark nobottommargin">
      <div class="container clearfix">

        <div class="row payments-info">
          <div class="col-lg-6">
            <p class="lead nomargin">Free Shipping on Orders of <strong>$199</strong> or above.</p>
          </div>
          <div class="col-lg-6">
            <ul class="payment-cards clearfix" style="margin-top: 5px;">
              <li><img src="{{ URL::asset('/images/cards/visa.svg') }}" alt="Visa"></li>
              <li><img src="{{ URL::asset('/images/cards/mc.svg') }}" alt="Master Card"></li>
              <li><img src="{{ URL::asset('/images/cards/ae.svg') }}" alt="American Express"></li>
              <li><img src="{{ URL::asset('/images/cards/pp.svg') }}" alt="PayPal"></li>
              <li><img src="{{ URL::asset('/images/cards/sk.svg') }}" alt="Skrill"></li>
              <li><img src="{{ URL::asset('/images/cards/2co.svg') }}" alt="2CheckOut"></li>
              <li><img src="{{ URL::asset('/images/cards/wu.svg') }}" alt="Western Union"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </div>

</section><!-- #content end -->
@endsection