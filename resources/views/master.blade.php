<!DOCTYPE html>
<html lang="{{\Config::get('app.locale')}}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8">
    <title>@yield('title') - Belis</title>
    <meta name="description" content="@yield('description')"/>
    <link href='{{asset('frontend/theme/default/css/style.css')}}' rel='stylesheet' type='text/css'/>
    <script type='text/javascript' src='{{asset('frontend/js/jquery-1.7.2.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/jquery.SuperSlide.html')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/js/global.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/js/lang/en.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/main.js')}}'></script>
    <link href='{{asset('frontend/css/global.css')}}' rel='stylesheet' type='text/css'/>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/jq1.7.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/js/jquery-1.7.2.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/js/global.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/js/lang/en.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/main.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/jq_cj.js')}}'></script>
    <script type='text/javascript' src='{{asset('frontend/theme/default/js/cloud-zoom.1.0.2.js')}}'></script>
</head>

<body>
<div class="header">
    <div class="header_t">
        <div class="header_ts">
            <ul class="contact" style="width:750px;">
                <li class="dh">0086-18567660207</li>
                <li class="email"><a href="mailto:info@belislaser.com">info@belislaser.com</a></li>
            </ul>
            <ul class="hfx">
                <li class="fx">
                    <a href="#" target="_blank"> <img
                                src="{{asset('frontend/theme/default/images/header-fe1.png')}}"/></a>
                    <a href="https://www.facebook.com/Sunnylee0207" target="_blank"> <img
                                src="{{asset('frontend/theme/default/images/header-fx2.png')}}"/></a>
                    <a href="#" target="_blank"> <img
                                src="{{asset('frontend/theme/default/images/hedaer-fx3.png')}}"/></a>
                    <a href="#" target="_blank"> <img
                                src="{{asset('frontend/theme/default/images/header-fx4.png')}}"/></a>
                    <a href="#" target="_blank"> <img
                                src="{{asset('frontend/theme/default/images/header-fx5.jpg')}}"/></a>
                </li>
                <li class="langs">
                    <a href="/" title="English" style="color:#f3fffc; font-weight:bold;">English</a>
                    <a href="http://es.belislaser.com/" title="Español" style="color:#f3fffc;">| Español</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header_b">
        <div class="header_bs">
            <div class="logo"><a href="index.html"><img src="{{asset('frontend/images/logo.png')}}"/></a></div>
            <ul class="nav">
                <li><a href="/" title="Home">Home</a></li>
                <li><a href="/about-us" title="About us">About us</a></li>
                <li><a href="/products" title="Products">Products</a></li>
                <li><a href="/news" title="News Center">News Center</a></li>
                <li><a href="/faq" title="Service">FAQ</a></li>
                <li><a href="/contact-us" title="Contact us">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>

@yield('main')

<div class="footers">
    <div class="footer">
        <div class="top">
            <dl class="weiz diz">
                <dt>Address</dt>
                <dd>International Trade Building, hall 2, 2404, Rinmin Road, xigong district, Luoyang, Henan</dd>
            </dl>
            <dl class="weiz fdh">
                <dt>Phones</dt>
                <dd>Tel:0086-18567660207</dd>
            </dl>
            <dl class="weiz fyj marginr0">
                <dt>E-mail</dt>
                <dd>info@belislaser.com</dd>
            </dl>
        </div>
        <div class="xiap">
            <p><i>Copyright © 2016 belis. All Rights Reserved</i></p>
        </div>
    </div>
    <div class="_top">
        <img src="{{asset('frontend/theme/default/images/top_.png')}}" onclick="javascript:returnTop();"/>
    </div>
</div>

<script>
    //引用 onclick="javascript:returnTop();
    var sdelay = 0;
    function returnTop() {
        $('body,html').animate({scrollTop: 0}, 500);
    }
    //淡入淡出
    $(window).scroll(function () {
        var st = $(this).scrollTop();
        if (st > 700) {
            $('._top').fadeIn()
        } else {
            $('._top').fadeOut()
        }
    });
</script>

</body>
</html>
