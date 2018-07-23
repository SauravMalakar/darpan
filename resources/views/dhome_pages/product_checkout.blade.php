@extends('dhome')
@section('yield_home_content')
    <!-- ==================checkout-content========== -->
    <section id="checkout-content">
        <div class="container">
            <div class="row" style="width:100%; margin: 0 auto;">
                <div class="col-lg-12 return-customer">
                    <p>Returning customer? <a href="#">Click here to login</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left-checkout" style="padding-left:0px;">
                    <div class="section-title">
                        <h2>billing details</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" style="padding-left:0px;">
                            <label>First Name <span>*</span></label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="col-lg-6 left_position_fix">
                            <label>Last Name <span>*</span></label>
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-left:0px;">
                            <label>Company Name</label>
                            <input type="text" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-left:0px;">
                            <label>Address <span>*</span></label>
                            <input type="text" placeholder="Street address">
                            <input type="text" placeholder="Apartment, Suit unit etc (optional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-left:0px;">
                            <label>Town / City <span>*</span></label>
                            <input type="text" placeholder="Town / City">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" style="padding-left:0px;">
                            <label>State / Country <span>*</span></label>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Select an option
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>Select an option</li>
                                    <li>Select an option</li>
                                    <li>Select an option</li>
                                    <li>Select an option</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 left_position_fix">
                            <label>Postcode / Zip <span>*</span></label>
                            <input type="text" placeholder="Postcode / Zip">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" style="padding-left:0px;">
                            <label>Email Address <span>*</span></label>
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="col-lg-6 left_position_fix">
                            <label>Phone <span>*</span></label>
                            <input type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" style="padding-left:0px;">
                            <input type="checkbox"> <span class="create_account">create an account</span>
                        </div>
                    </div>
                    <div class="section-title ship-different">
                        <h2 class="left_before_fix"><input type="checkbox"> ship to different address</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-left:0px;">
                            <label>Order Notes</label>
                            <textarea placeholder="Note about your order. e.g. special note for delivery"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="section-title">
                        <h2>your order</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 order-box">
                            <ul>
                                <li>PRODUCT <span>TOTAL</span></li>
                                <li>------------<span>------</span></li>
                                <li>SUBTOTAL <span class="bold">------</span></li>
                                <li>Shipping and Handling <span>Free Shipping</span></li>
                                <li class="total">TOTAL <span class="bold">-------</span></li>
                                <li><input type="radio"> Direct Bank Payment
                                    <div class="note">
                                        <div class="i fa fa-caret-up"></div>
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                    </div>
                                </li>
                                <li><input type="radio"> Check Payment</li>
                                <li><input type="radio"> PayPal <img src="{{asset('public/darpan_asset/images/card.jpg')}}" alt="image" style="margin-left:12px;"> <a href="#"><span>What is PayPal?</span></a></li>
                                <li><a href="#" class="place-order">Place Order<i class="fa fa-arrow-circle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================/ checkout-content============= -->
@endsection