@extends('dhome')
@section('yield_home_content')

    <!-- ========== Meet Our Advisors ============ -->
    <section class="our_advisor_inner_sec">
        <div class="container">
            <div class="row advisor_inner_title">
                <h2>Our products and pricing</h2>
                <p>We offer the best professional tool for GPS vehicle tracking and fleet management. A small GPS
                    tracker
                    containing GPS receiver and GPRS.</p>
            </div>
        </div>
        <div class="container-fluid"> <!-- For background-color -->
            <div class="container">
                <div class="row advisor_profile caption-style-3">
                    <div class="col-lg-3 col-md-3 col-sm-6 profile">
                        <img class="img-responsive" src="{{asset('public/darpan_asset/images/machine1.jpg')}}"
                             alt="images">
                        <div class="caption_bg">
                            <a href="#">
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Basic</h4>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:5000tk)</strong></span>
                            </a>
                            <p>
                                ▪ Daily fuel consumption record<br/>
                                ▪ Real-time live tracking<br/>
                                ▪ Engine on/off alert<br/>
                                ▪ GEO-Fence alert<br/>
                                ▪ Speed alert<br/>
                                ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                ▪ Power cut and low battery alert

                            </p>
                            <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                ▪ Internal Battery Back-up<br/>
                                ▪ History Playback<br/>
                                ▪ Auto History Backup<br/>
                                ▪ 1 Year Device Warranty
                                <br/>
                                ▪ 2 Years Service Warranty
                            </p>
                        </div>
                        <div class="caption">
                            <div class="blur">
                                <div class="border"></div>
                            </div>
                            <div class="caption-text">
                                <a href="#">
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Basic</h4>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:5000tk)</strong></span>
                                </a>
                                <p>
                                    ▪ Daily fuel consumption record<br/>
                                    ▪ Real-time live tracking<br/>
                                    ▪ Engine on/off alert<br/>
                                    ▪ GEO-Fence alert<br/>
                                    ▪ Speed alert<br/>
                                    ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                    ▪ Power cut and low battery alert
                                </p>
                                <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                    ▪ Internal Battery Back-up<br/>
                                    ▪ History Playback<br/>
                                    ▪ Auto History Backup<br/>
                                    ▪ 1 Year Device Warranty
                                    <br/>
                                    ▪ 2 Years Service Warranty
                                </p>
                                <span class="product_button">
                                    <a href="{{URL::to('/customer_reg')}}" class="product_button" style="color: #f9f9ff">Buy Now!</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 profile">
                        <img class="img-responsive" src="{{asset('public/darpan_asset/images/machine2.jpg')}}"
                             alt="images">
                        <div class="caption_bg">
                            <a href="#">
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Bike</h4>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:6000tk)</strong></span>
                            </a>
                            <p>
                                ▪ Daily fuel consumption record<br/>
                                ▪ Real-time live tracking<br/>
                                ▪ Engine on/off alert<br/>
                                ▪ GEO-Fence alert<br/>
                                ▪ Speed alert<br/>
                                ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                ▪ Power cut and low battery alert<br/>
                                ▪ Engine Block(in-case of vehicle theft)
                            </p>
                            <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                ▪ Internal Battery Back-up<br/>
                                ▪ History Playback<br/>
                                ▪ Auto History Backup<br/>
                                ▪ 1 Year Device Warranty
                                <br/>
                                ▪ 2 Years Service Warranty
                            </p>
                        </div>
                        <div class="caption">
                            <div class="blur">
                                <div class="border"></div>
                            </div>
                            <div class="caption-text">
                                <a href="#">
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Bike</h4>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:6000tk)</strong></span>
                                </a>
                                <p>
                                    ▪ Daily fuel consumption record<br/>
                                    ▪ Real-time live tracking<br/>
                                    ▪ Engine on/off alert<br/>
                                    ▪ GEO-Fence alert<br/>
                                    ▪ Speed alert<br/>
                                    ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                    ▪ Power cut and low battery alert<br/>
                                    ▪ Engine Block(in-case of vehicle theft)
                                </p>
                                <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                    ▪ Internal Battery Back-up<br/>
                                    ▪ History Playback<br/>
                                    ▪ Auto History Backup<br/>
                                    ▪ 1 Years Device Warranty
                                    <br/>
                                    ▪ 2 Years Service Warranty
                                </p>
                                <span class="product_button">
                                    <a href="{{URL::to('/customer_reg')}}" class="product_button" style="color: #f9f9ff">Buy now!</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 profile">
                        <img class="img-responsive" src="{{asset('public/darpan_asset/images/machine3.jpg')}}"
                             alt="images">
                        <div class="caption_bg">
                            <a href="#">
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Standard</h4>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:7500tk)</strong></span>
                            </a>
                            <p>
                                ▪ Daily fuel consumption record<br/>
                                ▪ Real-time live tracking<br/>
                                ▪ Engine on/off alert<br/>
                                ▪ GEO-Fence alert<br/>
                                ▪ Speed alert<br/>
                                ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                ▪ Power cut and low battery alert<br/>
                                ▪ Engine Block(in-case of vehicle theft)<br/>
                                ▪ Internal voice monitoring<br/>
                                ▪ Standard report.
                            </p>
                            <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                ▪ Internal Battery Back-up<br/>
                                ▪ History Playback<br/>
                                ▪ Auto History Backup<br/>
                                ▪ 2 Years Device Warranty<br/>
                                ▪ 1 Year Service Warranty.
                            </p>
                        </div>
                        <div class="caption">
                            <div class="blur">
                                <div class="border"></div>
                            </div>
                            <div class="caption-text">
                                <a href="#">
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Standard</h4>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:7500tk)</strong></span>
                                </a>
                                <p>
                                    ▪ Daily fuel consumption record<br/>
                                    ▪ Real-time live tracking<br/>
                                    ▪ Engine on/off alert<br/>
                                    ▪ GEO-Fence alert<br/>
                                    ▪ Speed alert<br/>
                                    ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                    ▪ Power cut and low battery alert<br/>
                                    ▪ Engine Block(in-case of vehicle theft)<br/>
                                    ▪ Internal voice monitoring<br/>
                                    ▪ Standard report.
                                </p>
                                <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                    ▪ Internal Battery Back-up<br/>
                                    ▪ History Playback<br/>
                                    ▪ Auto History Backup<br/>
                                    ▪ 2 Years Device Warranty.
                                    <br/>
                                    ▪ 1 Year Service Warranty.
                                </p>
                                <span class="product_button">
                                    <a href="{{URL::to('/customer_reg')}}" class="product_button" style="color: #f9f9ff">Buy now!</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 profile">
                        <img class="img-responsive" src="{{asset('public/darpan_asset/images/machine2.jpg')}}"
                             alt="images">
                        <div class="caption_bg">
                            <a href="#">
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Premium</h4>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:11000tk)</strong></span>
                            </a>
                            <p>
                                ▪ Daily fuel consumption record<br/>
                                ▪ Real-time live tracking<br/>
                                ▪ Engine on/off alert<br/>
                                ▪ GEO-Fence alert<br/>
                                ▪ Speed alert<br/>
                                ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                ▪ Power cut and low battery alert<br/>
                                ▪ Engine Block(in-case of vehicle theft)<br/>
                                ▪ Internal voice monitoring<br/>
                                ▪ Standard report.
                                <br/>
                                ▪ Loud horn(In-case of theft)<br/>
                                ▪ Emergency button for drivers safety<br/>
                                ▪ Darpan fuel Monitoring.<br/>
                                ▪ Premium report.
                            </p>
                            <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                ▪ Internal Battery Back-up<br/>
                                ▪ History Playback<br/>
                                ▪ Auto History Backup<br/>
                                ▪ 3 Years Device Warranty.
                                <br/>
                                ▪ Lifetime Service Warranty.
                            </p>
                        </div>
                        <div class="caption">
                            <div class="blur">
                                <div class="border"></div>
                            </div>
                            <div class="caption-text">
                                <a href="#">
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darpan Standard</h4>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(Price:11000tk)</strong></span>
                                </a>
                                <p>
                                    ▪ Daily fuel consumption record<br/>
                                    ▪ Real-time live tracking<br/>
                                    ▪ Engine on/off alert<br/>
                                    ▪ GEO-Fence alert<br/>
                                    ▪ Speed alert<br/>
                                    ▪ Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)<br/>
                                    ▪Power cut and low battery alert<br/>
                                    ▪ Engine Block(in-case of vehicle theft)<br/>
                                    ▪ Internal voice monitoring<br/>
                                    ▪ Standard report.
                                    <br/>
                                    ▪ Loud horn(In-case of theft)<br/>
                                    ▪ Emergency button for drivers safety<br/>
                                    ▪ Darpan fuel Monitoring.<br/>
                                    ▪ Premium report.
                                </p>
                                <p>▪ iOS and Android App with Real Time Push Notifications<br/>
                                    ▪ Internal Battery Back-up<br/>
                                    ▪ History Playback<br/>
                                    ▪ Auto History Backup<br/>
                                    ▪ 3 Years Device Warranty.
                                    <br/>
                                    ▪ Lifetime Service Warranty.<br/>
                                </p>
                                <span class="product_button">
                                    <a href="{{URL::to('/customer_reg')}}" class="product_button" style="color: #f9f9ff">Buy now!</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- End container-fluid -->
    </section>
    <!-- ========== /Meet Our Advisors ============ -->
@endsection