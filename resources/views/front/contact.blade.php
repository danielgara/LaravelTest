@extends('layouts.main')

@section('title', "Contact Us")
@section('h1title', "Contact Us")
@section('h1desc', "Contact SuitUSA")
@section('meta_desc', "suitusa.com is a leading shop to purchase all apparel that suits your style. Our customers are privileged to shop with our mens suits, tuxedos, white suits, Black suits and other suits as all our mens suit comes with high-excellence!")
@section('meta_key', "Mens suits, Tuxedos, Mans suits, Men's suits, Man suit, Black suits, White suits, Tuxedo, Brown suits, Double breasted suit")

@section('content')
<div class="content-wrap">
<div class="container clearfix">

    <div class="col_two_third">

        <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>How to contact SuitUSA?</h4>
        </div>

        <p class="justified">The fastest way to get in contact with our customer service department is by email at <b>info@suitusa.com</b>. Please allow 5-8 business hours for a response to your inquiry. You can save yourself a call! For tracking information either click the "track order" button located at the top right side of the home page, or email us with "Tracking Request" in the subject, and your shipping information in the body of the email, and we will respond with your tracking information in a timely manner.
<br /><br /><b>Do you need assistance with an order you have already taken delivery of?</b><br />
The quickest way to get an answer is via email at info@suitusa.com. Please allow 5 to 8 business hours for a response. 
<br /><br />
Please email <b>info@suitusa.com</b> with "regarding my shipment" in the subject. In the body include all information pertinent to your order. Please let us know any problems or questions you have, and include your name, address, phone number. These details will help us solver your problems and get in contact with you faster.
</p>


    </div>

    <div class="col_one_third col_last centered">

        <img src="{{ URL::asset('images/suitusa-logo.jpg') }}" />

        <div class="card martop40">
            <div class="card-header">Headquarter</div>
            <div class="card-body">
                <p class="card-text"><b>Our Los Angeles Store is located at:</b><br />
11517 Santa Monica Blvd<br />
Los Angeles, CA 90025<br /><br />
<b>Our Los Angeles Store is located at:</b><br />
The Store is open during the following hours:<br />
Monday - Wednesday : 10:15 a.m. - 5:45 p.m.<br />
Thursday - Friday : 10:00 a.m - 5:00 p.m.<br />
Saturday: 10:00am - 4:45pm.<br />
Sunday: 12:00am-4:30pm.</p>
            </div>
        </div>

    </div>

</div>

<div class="section nomargin nopadbottom">
    <div class="container clearfix">

        <div class="col_two_third centered">

            <div class="heading-block fancy-title nobottomborder title-bottom-border">
                <h4>Send us an Email</h4>
            </div>

            <div class="form-widget">

                <div class="form-result"></div>

                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">

                    <div class="form-process"></div>

                    <div class="col_one_third">
                        <label for="template-contactform-name">Name <small>*</small></label>
                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required">
                    </div>

                    <div class="col_one_third">
                        <label for="template-contactform-email">Email <small>*</small></label>
                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control">
                    </div>

                    <div class="col_one_third col_last">
                        <label for="template-contactform-phone">Phone <small>(optional)</small></label>
                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
                    </div>

                    <div class="clear"></div>

                    <div class="col_two_third">
                        <label for="template-contactform-subject">Order No <small>(optional)</small></label>
                        <input type="text" id="template-contactform-subject" name="subject" value="" class="sm-form-control">
                    </div>

                    <div class="col_one_third col_last">
                        <label for="template-contactform-service">Contact me regarding</label>
                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                        <option value="Select one...">Select one...</option>
                        <option value="I am interested in buying a suit">I am interested in buying a suit</option>
                        <option value="I need my Tracking Number">I need my Tracking Number</option>
                        <option value="I need to exchange my order for a size change">I need to exchange my order for a size change</option>
                        <option value="I need to exchange my order for a style change">I need to exchange my order for a style change</option>
                        <option value="Returns (Please read our complete Return policy at Return Policy)">Returns (Please read our complete Return policy at Return Policy)</option>
                        <option value="I need wholesale information">I need wholesale information</option>
                        <option value="Others (please explain)">Others (please explain)</option>
                        </select>
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="template-contactform-message">Message/Comment <small>*</small></label>
                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                    </div>

                    <div class="col_full hidden">
                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                    </div>

                    <div class="col_full">
                        <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
                    </div>

                    <input type="hidden" name="prefix" value="template-contactform-">

                </form>
            </div>
        </div>

        <div class="col_one_third  col_last">
            <div class="heading-block fancy-title nobottomborder title-bottom-border">
                <h4>Email contact</h4>
            </div>

            <p class="justified"><b>PLEASE E-MAIL FIRST WITH YOUR CONCERNS OR QUESTIONS BEFORE CONTACTING US THROUGH OUR SUPPORT LINE. WE WILL BE ABLE TO HELP YOU FASTER THIS WAY!</b>
<br /><br />
Our phone support is available during our business hours of 10am to 7:30pm PST Mon-Fri and 11am to 7pm on Sundays at (844) 650-3963
<br /><br />
To keep our prices competitive, and to keep items shipping faster we put an emphasis on email support!
<br /><br />
<b>Please note:</b> complicated sizing inquiries are best handled by Emailing us</div>

    </div>
</div>

<div class="container clearfix">
    <div class="row clear-bottommargin padtop80">

    <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
            <div class="fbox-icon">
                <a href="#"><i class="icon-map-marker2"></i></a>
            </div>
            <h3>Our Headquarters<span class="subtitle">Los Angeles, CA, USA</span></h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
            <div class="fbox-icon">
                <a href="#"><i class="icon-phone3"></i></a>
            </div>
            <h3>Speak to Us<span class="subtitle">(844) 650-3963 </span></h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
            <div class="fbox-icon">
                <a href="#"><i class="icon-email2"></i></a>
            </div>
            <h3>Send us an Email<span class="subtitle">info@suitusa.com</span></h3>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
            <div class="fbox-icon">
                <a href="#"><i class="icon-facebook2"></i></a>
            </div>
            <h3>Like us on Facebook<span class="subtitle">13K fan page likes</span></h3>
        </div>
    </div>

    </div>
</div>
</div>
@endsection