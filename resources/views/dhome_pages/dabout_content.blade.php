@extends('dhome')
@section('yield_home_content')

<!-- ============ Our history ========== -->
<section class="history_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 left-side">
                <h2>We provide top-notch
                    vehicle tracking solutions</h2>
                <p>Our company offers an extensive range of GPS tracking devices and other solutions required by
                    transportation companies and other organizations to make sure their drivers follow the set route. We
                    do not only offer GPS tracking systems, but also sell licenses for our products and technologies to
                    be integrated into products of other companies.</p>
                <ul>
                    <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;GPS tracking key</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;GPS tracking key basic</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;GPS tracking key pro</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 right_side">
                <img class="img-responsive" src="{{asset('public/darpan_asset/images/location.png')}}" alt="image">
                <h3>Company Mission </h3>
                <p>A GPS fleet tracking system that
                    revolutionizes fleet management.
                    Law enforcement agencies can take advantage of the ability to locate anyone using our GPS
                    trackers.With highly accurate unlimited real-time and historical GPS data, such as location,
                    departure time,
                    arrival time, and distance, law enforcement agencies can cut cost, increase efficiency and
                    safety.</p>
            </div>
        </div>
    </div>
</section>
<!-- ============ /Our history ========== -->
    @endsection