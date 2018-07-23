@extends('dhome')
@section('yield_home_content')
    <!-- ======= revolution slider section ======= -->
    <section class="rev_slider_wrapper me-fin-banner">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <video width="100%" height="100%" autoplay loop muted controls type="application/x-shockwave-flash">
                        <source src="{{asset('public/darpan_asset/images/slides/offer1slide.mp4')}}" type="video/mp4">
                    </video>
                </li>
            </ul>
        </div>
    </section>
    <!-- ======= /revolution slider section ======= -->

    <div style="color: red; box-sizing: border-box; border: 1px solid black; height=auto; width=100%;">
        <marquee><strong><a href="{{URL::to('/customer_reg')}}">Get 30% flat discount for Darpan Bike Tracker and Darpan Standard Tracker For Car! Click here for register..</a></strong></marquee>
    </div>

    <!-- ======= Welcome section ======= -->
    <section class="welcome_sec" id="view-more">
        <div class="container">
            <div class="row welcome_heading">
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <h2>SERVICES AND FEATURES<br></h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <p>Darpan Technologies providing fleet
                        management solutions to businesses of all sizes.
                        <br><br>Darpan GPS Tracker’s intuitive, full-featured solutions help businesses better manage
                        their drivers and
                        vehicles by extracting accurate and actionable intelligence from real-time location and
                        historical trips
                        report.

                    </p>
                </div>
            </div> <!-- End Row -->
            <div class="row welcome welcome_details">
                <div class="col-lg-6 col-md-12">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/1.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Real Time Tracking</h3>
                            <p>Track your vehicle’s real time for specific time with your device
                                with just one click.Signals that a GPS device constantly receives from the
                                satellite, the movement of the person or vehicle can be tracked.</p>
                        </div>
                    </div>
                    <div class="welcome_item welcome_item_bottom">
                        <img src="{{asset('public/darpan_asset/images/acalert.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Ac On/Off Alert</h3>
                            <p>User may get alert each time whenever the ignition is turned On/Off. AC On/Off alert
                                through notification.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bottom_row">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/engine.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Engine On/Off Alert</h3>
                            <p>Get real time engine On/Off alerts and also see the engine status of your vehicle. This
                                is a unique feature of Darpan GPS tracking which no one else is offering.</p>
                        </div>
                    </div>
                    <div class="welcome_item welcome_item_bottom">
                        <img src="{{asset('public/darpan_asset/images/fuelmonitor.png')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Fuel Monitoring</h3>
                            <p>Fuel Monitor is your assistant to help keeping an eye on the cost for car: fuel
                                consumption, cost per miles/km, fuels, services and repairs</p>

                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
            <div class="row welcome welcome_details">
                <div class="col-lg-6 col-md-12">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/history.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>History Route Playback</h3>
                            <p>Keeping track of persons, pets, and even vehicles are made possible today, thanks to GPS
                                technology.</p>
                        </div>
                    </div>
                    <div class="welcome_item welcome_item_bottom">
                        <img src="{{asset('public/darpan_asset/images/3.png')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Speed Alert</h3>
                            <p>This feature coordinates the car’s position, via GPS, with a database of speed limit
                                information to alert drivers if they’re speeding.This helps drivers maintain a safe
                                driving speed. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bottom_row">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/realnot.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>GEO-Fencing Alert</h3>
                            <p>Geo-fencing allow an administrator to set up triggers so when a device enters (or exits)
                                the boundaries defined by the administrator, an alert is issued.</p>
                        </div>
                    </div>
                    <div class="welcome_item welcome_item_bottom">
                        <img src="{{asset('public/darpan_asset/images/customized-solution.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Customization Support</h3>
                            <p>We provide service based solution to clients with good results.
                                We are delivering the right solutions at the right price to our customers</p>
                        </div>
                    </div>
                </div>
            </div> <!-- End 2 Row -->
            <div class="row welcome welcome_details">
                <div class="col-lg-6 col-md-12">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/voicemonitor.jpg')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Voice Monitoring</h3>
                            <p>Built-in microphone can
                                also capture voice simultaneously so that you can find out what's in the inside of your
                                car</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bottom_row">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/realtime-notification.png')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Real-time Notification</h3>
                            <p>Get real time push notifications on your mobile phone similar to Facebook App for
                                Geofence, Speed Limit, Battery Cut and other Emergency alerts.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- End 3 Row -->
            <div class="row welcome welcome_details">
                <div class="col-lg-6 col-md-12">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/emergencybutton.png')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Drivers Safety Button</h3>
                            <p>if your driver get in any emergency situation he can press our safety button and you will
                                be notified instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 bottom_row">
                    <div class="welcome_item">
                        <img src="{{asset('public/darpan_asset/images/engineblock.png')}}" alt="images">
                        <div class="welcome_info">
                            <h3>Engine Block</h3>
                            <p>vehicle safety now at its best,because you can remotely shut off/block your vehicles
                                engine right from our mobile application</p>
                        </div>
                    </div>
                </div>
            </div> <!-- End 4 Row -->
            <div class="row welcome welcome_details">

            </div> <!-- End 4 Row -->
        </div> <!-- End container -->
    </section> <!-- End welcome_sec -->
    <!-- ======= /Welcome section ======= -->

    <!-- ======= Who We Are ======= -->
    <section class="we_are clear_fix">
        <div class="left_side float_left">
            <div class="we_are_opacity">
                <div class="we_are_border">
                    <h2>We are E.s.t 2016</h2>
                </div>
            </div>
        </div> <!-- End Left_Side -->
        <div class="right_side float_right">
            <div class="we_are_deatails">
                <h2>Who We Are</h2>
                <p>
                    Vehicle Tracking Service with real time push notifications for speed alert, geo fence alert, engine
                    on/off alert, power cut alert, vibration alert and sos alert on your Android or iPhone with real
                    time tracking/ playback history and at the lowest monthly rates.
                    <br>
                    <br>
                </p>
                <div class="list_item">
                    <img src="{{asset('public/darpan_asset/images/icon-1.png')}}" alt="">
                    <p>Dedicated <br>Team</p>
                    {{--<img src="{{asset('public/darpan_asset/images/icon-2.png')}}" alt="">--}}
                    {{--<p>Best <br></p>--}}
                    <img src="{{asset('public/darpan_asset/images/icon-3.png')}}" alt="">
                    <p class="support">24/7 <br>Customer Supports</p>
                </div>
            </div>
        </div> <!-- End right_side -->
    </section> <!-- End We Are -->
    <!-- ======= /Who We Are ======= -->


    <!-- ======= Who We Are 2======= -->
    <section class="we_are clear_fix">
            <div class="testimonial">
                <img src="{{(asset('public/darpan_asset/images/banner.png'))}}" alt="Our Banner" style="width: 100%; height: auto;"/>
            </div>
    </section> <!-- End We Are -->
    <!-- ======= /Who We Are 2======= -->

    <section class="container-fluid partner_touch_sec clearfix">
        <div class="container">
            <div class="row">
                <div class="our_partner col-lg-6 col-md-7">
                    <h2>Our Clients</h2>
                    <p></p>
                    <ul>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon1.jpg')}}" alt="image"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon2.jpg')}}" alt="image"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon3.jpg')}}" alt="image"></a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon4.jpg')}}" alt="image"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon5.jpg')}}" alt="image"></a>
                        </li>
                        <li><a href="#"><img src="{{asset('public/darpan_asset/images/c-icon6.jpg')}}" alt="image"></a>
                        </li>
                    </ul>
                </div> <!-- End our_partner -->
                <div class="get_touch col-lg-6 col-md-5 col-sm-12 col-xs-12">
                    <h2>Get In Touch</h2>
                    <div class="get-in-touch-form">
                        <p></p>
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdixfW5YwsO5Om-xKrSU9cwXgd78C6HP_009Rq5Xf9ofTvcAQ/viewform?embedded=true" width="100%" height="400px" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                    </div>
                </div>
            </div> <!-- End get_touch -->
            <!-- End Row -->
        </div> <!-- End Container -->
    </section> <!-- End container-fluid -->
    <!-- ======== /Our Partner & Get in touch ======== -->
@endsection