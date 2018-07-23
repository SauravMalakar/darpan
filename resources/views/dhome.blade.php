<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Darpan Tracker</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{asset('public/darpan_asset/images/fav-icon/trackingIco.ico')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/darpan_asset/css/bootstrap/bootstrap.css')}}"
          media="screen">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,300,300italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{asset('public/darpan_asset/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!-- Stroke Gap Icon -->
    <link rel="stylesheet" href="{{asset('public/darpan_asset/fonts/stroke-gap/style.css')}}">
    <!-- owl-carousel css -->
    <link rel="stylesheet" href="{{asset('public/darpan_asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/darpan_asset/css/owl.theme.css')}}">

    <!-- owl-carousel css -->
    <link rel="stylesheet" href="{{asset('public/darpan_asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/darpan_asset/css/owl.theme.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/darpan_asset/css/custom/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/darpan_asset/css/responsive/responsive.css')}}">


    {{--<!--[if lt IE 9]>--}}
    {{--<script src="{{asset('public/darpan_asset/js/html5shiv.js')}}"></script>--}}
    {{--<![endif]-->--}}


</head>
<body class="home service2 product contact_page price">
<!-- =======Header ======= -->
<!--<header>-->
<!--    <div class="bottom_header top-bar-gradient">-->
<!--        <div class="container clear_fix">-->
<!--            <div class="float_left logo">-->
<!--                <a href="{{URL::to('/')}}">-->
<!--                    <img src="{{asset('public/darpan_asset/images/ddpn1.png')}}"-->
<!--                                                            style="width: 100px;height: 35px;"-->
<!--                         alt="Darpan GPS : Providing top-notch vehicle tracking solutions">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="float_right address">-->
<!--                <div class="top-info">-->
<!--                    <div class="icon-box">-->
<!--                        <span class=" icon icon-Pointer"></span>-->
<!--                    </div>-->
<!--                    <div class="content-box">-->
<!--                        <p> House#15,Road#17<br/>Beside Kemal Ataturk Avenue<br/>Banani,Dhaka-1213</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="top-info">-->
<!--                    <div class="icon-box">-->
<!--                        <span class="separator icon icon-Phone2"></span>-->
<!--                    </div>-->
<!--                    <div class="content-box">-->
<!--                        <p>+880 1842327726<br>support@darpan.com.bd<br>info@darpan.com.bd</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="top-info">-->
<!--                    <div class="icon-box">-->
<!--                        <span class="separator icon icon-Timer"></span>-->
<!--                    </div>-->
<!--                    <div class="content-box">-->
<!--                        <p>We Are Available<br/>Mon - Sat 9.00am - 6.00pm <br/>Sunday Closed</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div> <!-- end container -->
<!--    </div> <!-- end bottom_header -->
<!--</header> <!-- end header -->
<!-- =======/Header ======= --> 

<!-- ======= mainmenu-area section ======= -->
<section class="mainmenu-area">
    <div class="container">
        <nav class="clearfix">
             <!--Brand and toggle get grouped for better mobile display--> 
            <div class="navbar-header clearfix">
                <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-th fa-2x"></span>
                </button>
            </div>
            <div class="nav_main_list custom-scroll-bar pull-left" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="hover_slip">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li>
                        <a href="{{URL::to('/about_us')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/services')}}">Benefits</a>
                    </li>

                    <li>
                        <a href="">smart maintenance</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="{{URL::to('/services')}}">What is  smart maintenance?</a></li>
                                <li><a href="{{URL::to('/services')}}">Pay BRTA Utility Bills</a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{URL::to('/pricing')}}">Our Pricing</a>
                    </li>

                    <li>
                        <a href="{{URL::to('/customer_reg')}}">Customer Registration</a>
                    </li>
                    <li><a class="contact" href="{{URL::to('/contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="find-advisor pull-right">
                <a href="http://173.212.251.223/authentication/create" class="advisor" alter="See Our User Friendly And Customised Web Application">Log In</a>
            </div>
        </nav> <!-- End Nav -->
    </div> <!-- End Container -->
</section>
<!-- ======= /mainmenu-area section ======= -->

@yield('yield_home_content')

<!-- ============ /free consultation ================ -->

<!-- ============= Footer ================ -->
<footer>
    <div class="top_footer container-fluid">
        <div class="container">
            <div class="row" align="center">
                <div class="col-lg-3 col-md-3 col-sm-12 part3">
                    <h5><strong>Contact Us @</strong></h5>
                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;+880 1842327726</p>
                    <p>info@darpan.com.bd<br/>sales@darpan.com.bd</p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 part1">
                    <a href="{{URL::to('/about_us')}}"><img src="{{asset('public/darpan_asset/images/ddpn1.png')}}"
                                                            style="width: 100px;height: 35px;" alt="Logo"></a>
                    <p>develops connected-vehicle technology to help you track & secure vehicles, make managing fleets
                        easier through robust fleet management solutions, and train drivers to become safer on the
                        road.</p>
                    <ul class="p0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-12 part2">
                    <h5>Our Services</h5>
                    <ul class="p0">
                        <li><a href="https://www.facebook.com/darpan.tracker/"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Vehicle
                                Tracking</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Fleet Management</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Customized Support</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;24/7,Online Support</a></li>
                    </ul>
                </div>
                {{--<div class="col-lg-3 col-md-3 col-sm-12 part3">--}}
                    {{--<h5><strong>Contact Us @</strong></h5>--}}
                    {{--<p><i class="fa fa-phone"></i>&nbsp;&nbsp;+880 1842327726</p>--}}
                    {{--<p>info@darpan.com.bd<br/>sales@darpan.com.bd</p>--}}
                {{--</div>--}}
                <div class="col-lg-3 col-md-2 col-sm-12 part4">
                    <h5>Our Vision</h5>
                    <p>
                        A GPS fleet tracking system that
                        revolutionizes fleet management.
                    </p>
                </div>
            </div> <!-- End row -->
        </div>
    </div> <!-- End top_footer -->
    <!--<div class="bottom_footer container-fluid">-->
    <!--    <div class="container">-->
    <!--        <p class="float_left">Copyright &copy; Darpan Technology 2016. All rights reserved. </p>-->
    <!--        <p class="float_right">Created by: Darpan Technogy</p>-->
    <!--    </div>-->
    <!--</div> <!-- End bottom_footer -->
</footer>

<header>
    <div class="bottom_header top-bar-gradient">
        <div class="container clear_fix">
            <div class="float_left logo">
                <a href="{{URL::to('/')}}">
                    <img src="{{asset('public/darpan_asset/images/ddpn1.png')}}"
                                                            style="width: 100px;height: 35px;"
                         alt="Darpan GPS : Providing top-notch vehicle tracking solutions">
                </a>
            </div>
            <div class="float_right address">
                <div class="top-info">
                    <div class="icon-box">
                        <span class=" icon icon-Pointer"></span>
                    </div>
                    <div class="content-box">
                        <p> House#15,Road#17<br/>Beside Kemal Ataturk Avenue<br/>Banani,Dhaka-1213</p>
                    </div>
                </div>
                <div class="top-info">
                    <div class="icon-box">
                        <span class="separator icon icon-Phone2"></span>
                    </div>
                    <div class="content-box">
                        <p>+880 1842327726<br>support@darpan.com.bd<br>info@darpan.com.bd</p>
                    </div>
                </div>
                <div class="top-info">
                    <div class="icon-box">
                        <span class="separator icon icon-Timer"></span>
                    </div>
                    <div class="content-box">
                        <p>We Are Available<br/>Mon - Sat 9.00am - 6.00pm <br/>Sunday Closed</p>
                    </div>
                </div>
            </div>
        </div> <!-- end container-->
    </div> <!-- end bottom_header -->
</header> <!-- end header-->

<!-- ============= /Footer =============== -->

<!-- Js File -->

<!-- j Query -->
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery-2.1.4.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/validate.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('public/darpan_asset/js/revolution-slider/jquery.themepunch.tools.min.js')}}"></script>
<!-- Revolution Slider Tools -->
<script src="{{asset('public/darpan_asset/js/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Revolution Slider -->
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('public/darpan_asset/js/revolution-slider/extensions/revolution.extension.video.min.js')}}"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="{{asset('public/darpan_asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('public/darpan_asset/js/jquery.fancybox.pack.js')}}"></script>


<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('public/darpan_asset/js/owl.carousel.js')}}"></script>
<script src="{{asset('public/darpan_asset/js/owl-custom.js')}}"></script>
<!-- Custom & Vendor js -->
<script type="text/javascript" src="{{asset('public/darpan_asset/js/custom.js')}}"></script>


<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/5b2f84d1d0b5a54796821dcc/default';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "217668172318771", // Facebook page ID
            whatsapp: "+8801670571644", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-15521914-3', 'auto');
    ga('send', 'pageview');

</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>