@extends('layouts.main')

@section('title', "About Us")
@section('h1title', "About Us")
@section('h1desc', "Information about SuitUSA")
@section('meta_desc', "Our men's suit comes in large varieties, you may looking for the best Tuxedo, Double breasted suit, Italian suits, Purple suits, or just Formal Wear, you just come to the best online shop that takes care of all your requirement!")
@section('meta_key', "Double breasted suits, Brown suits, Mens suits, White suits, Tuxedo, Black suit, Fashion suit, Cheap suit, Tuxedos, Brown suit, Men's suits, Mens suit, Discount suit, 3 piece suits, Vested suits, Oriental suits")

@section('content')
<div class="content-wrap">
<div class="container clearfix">

    <div class="col_two_third">

        <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>Company Profile</h4>
        </div>

        <p class="justified">We are a large direct to consumer manufacturer, based out of the USA, with offices in Germany and Italy. Our specialty is in manufacturing affordable but high quality business suits, tuxedos, blazers, dress pants, dress shoes, dress shirts, and the finest silk ties. We started out providing our custom made goods under the Ebay store name of dress.up on German Ebay in 1996, where we kept and maintained a 100% Positive Feedback rating, which we are very proud of. 
            After much growth, we decided to create suitusa.com in 2009 to bring high quality, affordable european suits and menswear to the American market. We have designed our website to assist customers in selecting the clothing they desire by themselves without the "intervention" of salesmen. You can be assured when you buy from us, you are spending your hard earned money on quality rather than a brand names slapped on a cheaply made suit. 
            Our products are often compared to such esteemed brands as Zegna and Canali. We truly believe we offer the most authentic, highest quality, and best fitting suits and tuxedos around. All orders are secured by our 256 bit SSL encryption on our site, so not only are you going to get the best suit money can buy, your personal information and credit card information is safe while purchasing from us as well! </p>


    </div>

    <div class="col_one_third col_last centered">

        <img src="{{ URL::asset('images/about100.jpg') }}" />

    </div>

</div>

<div class="section nomargin nopadbottom">
    <div class="container clearfix">

        <div class="col_one_third centered">
            <img src="{{ URL::asset('images/about2.jpg') }}" />
        </div>

        <div class="col_two_third  col_last">
            <div class="heading-block fancy-title nobottomborder title-bottom-border">
                <h4>Suit USA CONCEPTS</h4>
            </div>

            <p class="justified">SuitUSA makes suits for men of all incomes by providing the highest quality product for the lowest everyday prices. By focusing on business and professional clothing trends which change on a more infrequent basis we insulate ourselves from the constant end of season disposal of garments, that is very costly, 
allowing us to keep every day low prices, as our inventories can be maintained for longer periods which is less costly. We also provide business casual, 
and sportswear to accommodate a larger audience and fulfill more of the clothing needs of our customers, whether during the work week, of on weekends. 
All of our customer service representatives go through extensive training on not only customer service, but also in clothing construction, styles, and trends, making the well equipped to help you in any situation, and provide clear and accurate answers to any of your questions. We also employee highly trained tailors at our store locations. 
By putting our focus in making quality clothing at affordable every day prices, along with our top tier customer service, we have been able to grow faster than any comparable brand within the USA and Canadian clothing markets. We use our love of clothing, our knowledge of fashion, and our creative sense to help our customer keep current wardrobes and look there best day in and day out.
There is a history of mens clothing we respect and feel compelled and responsible to pass along to the next generation. We have designed our website to accommodate customers in purchasing all of there clothing in a salesman free atmosphere, without pressure, though if you need help our professional wardrobe consultants are only a phone call away.</p>
        </div>

    </div>
</div>

<div class="container clearfix padtop80">
    <div class="col_two_third">
            <div class="heading-block fancy-title nobottomborder title-bottom-border">
                <h4>MISSION STATEMENT</h4>
            </div>

            <p class="justified">We feel that our customers should receive the best. Plain and simple. Best customer service, best quality clothing, best selection, and best prices. 
Selection is important to meet the needs of many different customers, and we carry a wide selection of just about any style anyone could be looking for. 
We provide a fast environment, where you can get in, find what you are looking for, and get it delivered quick, because no one has time waste, when we are all just trying to look our best!  </p>
    </div>

    <div class="col_one_third col_last centered">
    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                <h4>COUNTRY OFFICES</h4>
            </div>
            <p class="centered">
        <b>More than 7 offices in member countries</b>
        <div class="widget_links">
        <ul>
            <li><div>HEADQUARTERS  Italy & Los Angeles USA	: Turkey</div></li>
            <li>East Asia & the Pacific	: Middle East & North Africa</li>
            <li>Europe, Western	: South Asia</li>
            <li>Europe & Central Asia	: Latin America & Caribbean</li>
        </ul>
        </div>
    </div>
 </div>
</div>
@endsection