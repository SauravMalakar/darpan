@extends('dhome')
@section('yield_home_content')

    <!-- =============== Our Affordable Pricing =============== -->
    <section class="affordable_pricing">
        <div class="container">
            <h2>Our Affordable Pricing</h2>
            <p>Keeping costs down is always important, however value for money is crucial. Our custom solutions are
                completely affordable, completely different and of far better value to your business.</p>
            <div class="row" style="padding-top: 39px;">
                <div class="col-lg-4">
                    <i class="fa fa-magic"></i>
                    <a href="#">Best pricie</a>
                    <p>We guarantee you always get the lowest price when you reserve a machine through our support
                        forum</p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-magic"></i>
                    <a href="#">discounts offers</a>
                    <p>Contact our customer care number for discount price</p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-magic"></i>
                    <a href="#">our plans</a>
                    <p>Discover which plan is correct for your requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =============== /Our Affordable Pricing =============== -->

    <!-- =============== Who We Are =============== -->
    <section class="pricing_who_we">
        <div class="container">
            <h2>Our Pricing</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 pricing_category">
                    <h4>Darpan Basic</h4>
                    <h6>Device Price 5000tk Only</h6>
                    <p><sup>Tk</sup><span>450</span><br>/month</p>
                    <ul>
                        <li>Daily fuel consumption record</li>
                        <li>Real-time live tracking</li>
                        <li>Engine on/off alert</li>
                        <li>GEO-Fence alert</li>
                        <li>Speed alert</li>
                        <li>Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)</li>
                        <li>Power cut and low battery alert</li>
                        <li>iOS and Android App with Real Time Push Notifications</li>
                        <li>Internal Battery Back-up</li>
                        <li>History Playback</li>
                        <li>Auto History Backup</li>
                        <li>2 Year Device Warranty</li>
                        <li>1 Year Service Warranty</li>
                    </ul>
                    <a href="{{URL::to('/customer_reg')}}">Proceed To Pay</a>
                </div>
                <div class="col-lg-3 col-md-6 pricing_category">
                    <h4>Darpan Bike</h4>
                    <h6>Device Price 6000tk Only</h6>
                    <p><sup>Tk</sup><span>350</span><br>/month</p>
                    <ul>
                        <li>Daily fuel consumption record</li>
                        <li>Real-time live tracking</li>
                        <li>Engine Block(in-case of vehicle theft)</li>
                        <li>Engine on/off alert</li>
                        <li>GEO-Fence alert</li>
                        <li>Speed alert</li>
                        <li>Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)</li>
                        <li>Power cut and low battery alert</li>
                        <li>iOS and Android App with Real Time Push Notifications</li>
                        <li>Internal Battery Back-up</li>
                        <li>History Playback</li>
                        <li>Auto History Backup</li>
                        <li>2 Year Device Warranty</li>
                        <li>1 Year Service Warranty</li>
                    </ul>
                    <a href="{{URL::to('/customer_reg')}}">Proceed To Pay</a>
                </div>
                <div class="col-lg-3 col-md-6 pricing_category">
                    <h4>Darpan Standerd</h4>
                    <h6>Device Price 7500tk Only</h6>
                    <p><sup>Tk</sup><span>550</span><br>/month</p>
                    <ul>
                        <li>Daily fuel consumption record</li>
                        <li>Real-time live tracking</li>
                        <li>Engine Block(in-case of vehicle theft)</li>
                        <li>Engine on/off alert</li>
                        <li>GEO-Fence alert</li>
                        <li>Speed alert</li>
                        <li>Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)</li>
                        <li>Power cut and low battery alert</li>
                        <li>iOS and Android App with Real Time Push Notifications</li>
                        <li>Internal Battery Back-up</li>
                        <li>History Playback</li>
                        <li>Internal Voice Monitoring</li>
                        <li>Standard Report</li>
                        <li>Auto History Backup</li>
                        <li>3 Year Device Warranty</li>
                        <li>1 Year Service Warranty</li>
                    </ul>
                    <a href="{{URL::to('/customer_reg')}}">Proceed To Pay</a>
                </div>
                <div class="col-lg-3 col-md-6 pricing_category">
                    <h4>Darpan Premium</h4>
                    <h6>Device Price 11000tk Only</h6>
                    <p><sup>Tk</sup><span>750</span><br>/month</p>
                    <ul>
                        <li>Daily fuel consumption record</li>
                        <li>Real-time live tracking</li>
                        <li>Engine Block(in-case of vehicle theft)</li>
                        <li>Engine on/off alert</li>
                        <li>GEO-Fence alert</li>
                        <li>Speed alert</li>
                        <li>Multiple alarms (Instant alert for vibration, over speed, power off, geo-fence)</li>
                        <li>Power cut and low battery alert</li>
                        <li>iOS and Android App with Real Time Push Notifications</li>
                        <li>Internal Battery Back-up</li>
                        <li>History Playback</li>
                        <li>Internal Voice Monitoring</li>
                        <li>Loud Horn(incase Of Vehicle Theft)</li>
                        <li>emergency Button For Driver Safety</li>
                        <li>Darpan Fuel Monitoring</li>
                        <li>Premium Report</li>
                        <li>Auto History Backup</li>
                        <li>3 Year Device Warranty</li>
                        <li><strong>Life Time Service Warranty</strong></li>
                    </ul>
                    <a href="{{URL::to('/customer_reg')}}">Proceed To Pay</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== /Who We Are =============== -->
@endsection