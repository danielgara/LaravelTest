<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SuitUSA" />
	<meta name="description" content="@yield('meta_desc')">
 	<meta name="keywords" content="@yield('meta_key')">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/custom_style.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="{{ URL::asset('js/jquery.js') }}"></script>
	<title>@yield('title')</title>

</head>
    <body class="stretched no-transition">
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

    <div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul class="sf-js-enabled clearfix" style="touch-action: pan-y;">
							@guest
							<li class=""><a href="{{ route('login') }}" class="sf-with-ul">Login</a></li>
							<li class=""><a href="{{ route('register') }}" class="sf-with-ul">Register</a></li>
							@else
							<li class=""><a href="{{ route('myaccount') }}" class="sf-with-ul">My Account ({{ Auth::user()->name }})</a></li>
							<li class=""><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                        	@endguest
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<ul class="header-extras">
					<li>
						<i class="i-plain i-plain2 icon-email3 nomargin"></i>
						<div class="he-text">
							<span>info@suitusa.com</span>
						</div>
					</li>
					<li>
						<i class="i-plain i-plain2 icon-call nomargin"></i>
						<div class="he-text">
							<span>1-844-650-3963</span>
						</div>
					</li>
				</ul><!-- #top-social end -->

				</div>

			</div>

		</div>

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{route('home')}}" class="standard-logo" data-dark-logo="{{ URL::asset('images/logo.jpg') }}"><img src="{{ URL::asset('images/logo.jpg') }}" alt="SuitUSA Logo"></a>
                        <a href="{{route('home')}}" class="retina-logo" data-dark-logo="{{ URL::asset('images/logo.jpg') }}"><img src="{{ URL::asset('images/logo.jpg') }}" alt="SuitUSA Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">
                        <ul>
                            <li><a href="{{route('home')}}"><div>Home</div></a>
                            <li><a href="{{route('shop')}}"><div>Shop</div></a></li>
                            <li><a href="{{route('cart')}}"><div>My Cart</div></a></li>
                            <li><a href="#"><div>Blog</div></a></li>
                            <li><a href="{{route('faq')}}"><div>Help/FAQ</div></a></li>
                            <li><a href="{{route('about')}}"><div>About Us</div></a></li>
                            <li><a href="{{route('contact')}}"><div>Contact Us</div></a></li> 
							<li><a><div>Other</div></a>
								<ul style="display: none;">
									<li><a href="#"><div>Measuring Info</div></a></li>
									<li><a href="#"><div>100% Guarantee</div></a></li>
									<li><a href="#"><div>Group Order</div></a></li>
								</ul> 
							</li>
                        </ul>

                        <!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="{{route('cart')}}"><i class="icon-shopping-cart"></i>
							@if(!empty($cartcount))
							<span>{{$cartcount}}</span>
							@endif
							</a>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="#" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <!-- Page Title
		============================================= -->
		@if(!empty($breadlist))
		<section id="page-title">

            <div class="container clearfix">
                <h1 class="col-md-8 col-lg-10">@yield('h1title')</h1>
                <span>@yield('h1desc')</span>
                <ol class="breadcrumb">
                @foreach ($breadlist as $bread)
                    @if ($bread[3] == "1")
                        <li class="breadcrumb-item active" aria-current="page">{{$bread[0]}}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{route($bread[1],$bread[2])}}">{{$bread[0]}}</a></li>
                    @endif
                @endforeach
                </ol>
            </div>

        </section><!-- #page-title end -->
		@endif
		
        <!-- Content
		============================================= -->
		<section id="content">
			@if(!empty($fullwidth))
                @yield('content')
			@else
			<div class="content-wrap">
			<div class="container clearfix">
				<div class="postcontent nobottommargin col_last">
                @yield('content')
                </div>
				@include('sidebar.'.$sidebar)
			</div>
			</div>
			@endif
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_two_third">
						<div class="col_one_third">
							<div class="widget clearfix">
								<p class="justified">High quality business suits, tuxedos, blazers, dress pants, dress shoes, dress shirts, and the finest silk ties.</p>

								<div style="background: url('{{ URL::asset('images/world-map.png') }}') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										11517 Santa Monica Blvd<br>
										Los Angeles, CA 90025<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (310) 474-7571<br>
									<abbr title="Fax"><strong>Toll Free Phone:</strong></abbr> 1-844-650-3963<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@suitusa.com
								</div>
							</div>
						</div>

						<div class="col_one_third">
							<div class="widget widget_links clearfix centered">
								<h4>Menu</h4>
								<ul>
                                <li><a href="{{route('home')}}">Home</a></li>
								<li><a href="{{route('shop')}}">Shop</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('cart')}}">My Cart</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('faq')}}">Help/FAQ</a></li>
								</ul>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2019</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2019</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">
							<div class="row">
								<div class="col-lg-6 clearfix bottommargin-sm">
									<a target="_blank" href="https://www.facebook.com/mensusasuit" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" href="https://www.facebook.com/mensusasuit"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a target="_blank" href="https://twitter.com/suitusa_suits" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
									</a>
									<a target="_blank" href="https://twitter.com/suitusa_suits"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Twitter</small></a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2019 All Rights Reserved by SuitUSA<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a target="_blank" href="https://www.facebook.com/mensusasuit" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a target="_blank" href="https://twitter.com/suitusa_suits" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a target="_blank" href="https://www.pinterest.com/suitusalinks/" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@suitusa.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> 1-844-650-3963
					</div>

				</div>
			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

    </div><!-- #wrapper end -->
    
    <!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script src="{{ URL::asset('js/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ URL::asset('js/functions.js') }}"></script>
	<script src="{{ URL::asset('js/custom_js.js') }}"></script>

    </body>
</html>