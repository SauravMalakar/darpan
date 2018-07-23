@extends('dhome')
@section('yield_home_content')
    <section class="contact_us_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
                    <h2>Darpan Secure Pay Terminal</h2>
                    <p>You can talk to our online representative at any time. Please use our Live Chat System on our website<br>
                        Fill up below payment form.</p>
                </div> <!-- End section title -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
                    <form class="contact-form" method="post" action="">
                        {{csrf_field()}}
                        <input class="form-control name" type="text" name="cus_name" placeholder="Your Name">
                        <input class="form-control email" type="email" name="cus_email" placeholder="Your Email">
                        <input class="form-control" type="text" name="cus_phone_number" placeholder="Your Phone Number">
                        <input class="form-control" type="text" name="cus_payable_amount" placeholder="Amount">
                        <button type="submit" class="submit" id="portwallet-pay">PAY NOW!<i class="fa fa-arrow-circle-right"></i></button>
                    </form> <!-- End form holder -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
                    <address>
                        <div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
                        <div class="address_holder float_left"> House #15, Road #17 <br> Beside Kemal Ataturk Avenue <br>Bonani, Dhaka-1213</div>
                    </address>
                    <address class="clear_fix">
                        <div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
                        <div class="address_holder float_left">info@darpan.com.bd <br>sales@darpan.com.bd</div>
                    </address>
                    <address class="clear_fix">
                        <div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
                        <div class="address_holder float_left">+880 1842327726</div>
                    </address>
                </div>
            </div>
        </div>
    </section>

@endsection