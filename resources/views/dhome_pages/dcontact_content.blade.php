@extends('dhome')
@section('yield_home_content')


    {{--<!-- ======= Banner ======= -->--}}
    {{--<section class="p0 container-fluid banner about_banner">--}}
    {{--<div class="about_banner_opacity">--}}
    {{--<div class="container">--}}
    {{--<div class="banner_info_about">--}}
    {{--<h1>Contact Us</h1>--}}
    {{--<ul>--}}
    {{--<li><a href="{{URL::to('/')}}">Home</a></li>--}}
    {{--<li><i class="fa fa-angle-right"></i></li>--}}
    {{--<li>Contact Us</li>--}}
    {{--</ul>--}}
    {{--</div> <!-- End Banner Info -->--}}
    {{--</div> <!-- End Container -->--}}
    {{--</div> <!-- End Banner_opacity -->--}}
    {{--</section> <!-- End Banner -->--}}
    <!-- ================= /Banner ================ -->
    <!-- =================== Contact us container ============== -->
    <section class="contact_us_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
                    <h2>Get In Touch With Us</h2>
                    <p>You can talk to our online representative at any time. Please use our Live Chat System on our
                        website or <br>
                        Fill up below instant messaging programs.</p>
                </div> <!-- End section title -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
                    <div class="typeform-widget" data-url="https://darpan7.typeform.com/to/O8Iukg"
                         style="width: 100%; height: 470px;"></div>
                    <script> (function () {
                            var qs, js, q, s, d = document, gi = d.getElementById, ce = d.createElement,
                                gt = d.getElementsByTagName, id = "typef_orm", b = "https://embed.typeform.com/";
                            if (!gi.call(d, id)) {
                                js = ce.call(d, "script");
                                js.id = id;
                                js.src = b + "embed.js";
                                q = gt.call(d, "script")[0];
                                q.parentNode.insertBefore(js, q)
                            }
                        })() </script>
                    <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">
                        powered by <a
                                href="https://admin.typeform.com/signup?utm_campaign=O8Iukg&utm_source=typeform.com-12153071-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN"
                                style="color: #999" target="_blank">Typeform</a></div> <!-- End form holder -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
                    <address>
                        <div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
                        <div class="address_holder float_left">House #15, Road #17<br/>Beside Kemal Ataturk Avenue<br/>Bonani, Dhaka-1213
                        </div>
                    </address>
                    <address class="clear_fix">
                        <div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
                        <div class="address_holder float_left">info@darpan.com.bd<br/>sales@darpan.com.bd
                        </div>
                    </address>
                    <address class="clear_fix">
                        <div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
                        <div class="address_holder float_left">+880 1842327726</div>
                    </address>
                </div>
            </div>
        </div>
    </section>

    <!-- =================== /Contact us container ============== -->

    <!-- =============== google map ============= -->
    <div class="map">
        <!-- <div class="google-map" id="contact-google-map" data-map-lat="40.650002" data-map-lng="-73.949997" data-icon-path="images/map-marker.png" data-map-title="Awesome Place" data-map-zoom="12"></div> -->

        <div class="google-map" id="contact-google-map" data-map-lat="-33.74040" data-map-lng="150.94035"
             data-icon-path="images/map-marker.png" data-map-title="206 Meurants Ln, Glenwood NSW 2768, Australia"
             data-map-zoom="12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d383.73348862838515!2d90.40358118122647!3d23.79338321463878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m0!4m5!1s0x3755c70e1333b05f%3A0x9d90383de26ac0fb!2sNorthern+University+Bangladesh+(NUB)%2C+13+Rd+No+17%2C+Dhaka+1213%2C+Bangladesh!3m2!1d23.7934566!2d90.4037006!5e0!3m2!1sen!2sus!4v1527070136507"
                    width="100%" height="465px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- =============== /google map ============= -->
@endsection