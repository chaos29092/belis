@extends('master')

@section('main')
    <div id="banner" style="height:308px">
        <div class="item" style="min-width:1200px !important;width:100%;">
            @yield('banner')
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            jQuery("#banner").slide({
                mainCell: ".bd",
                autoPlay: true,
                effect: "fold",
                interTime: '5000',
                easing: "easeInQuint"
            });
        });
    </script>    <!--banner End-->
    <div class="article">
        <div class="wrap">
            <dl class="AH_title">
                <dt></dt>
                <dd>
                    <a href="/"> Home </a> >
                    <a href="#">@yield('page_name')</a></dd>
            </dl>
            <!--left nav-->
            <div class="left">
                <!--contact_us-->
                <div class="Contact_us">
                    <div class="cate_title black_bg">Contact us</div>
                    <div class="Add cl">International Trade Building, hall 2, 2404, Rinmin Road, xigong district, Luoyang, Henan
                    </div>
                    <div class="Phone cl">
                        Call us now:0086-18567660207
                    </div>
                    <div class="Email cl">Email:info@belislaser.com</div>
                </div>
                <div class="hot_p">
                    <div class="Titlt">Hot Products</div>
                    <div class="cphide" style="margin-top: 22px;">
                        <div class="cp_list">
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="../ipl-bw-185_p0046.html" title="IPL BW-185"><img
                                                src="../u_file/1601/products/20/430b2a8a5b.jpg" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="../ipl-bw-185_p0046.html" title="IPL BW-185">IPL BW-185</a></dt>
                                    <dd>The Mini IPL Hair-removal syst...</dd>
                                    <dd><a href="../ipl-bw-185_p0046.html" title="Leam More">Leam More</a></dd>
                                </dl>
                            </div>
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="../ultrasonic-peeling-machine-bm-705_p0047.html"
                                       title="Ultrasonic Peeling Machine BM-705"><img
                                                src="../u_file/1601/products/20/a74ddd1e26.jpg" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="#"
                                           title="Ultrasonic Peeling Machine BM-705">Ultrasonic Pe...</a></dt>
                                    <dd>This equipment is designed for...</dd>
                                    <dd><a href="#" title="Leam More">Leam
                                            More</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @yield('page_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection