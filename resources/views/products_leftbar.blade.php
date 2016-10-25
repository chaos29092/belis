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
                <div class="menu">
                    <div class="cate_title">{{trans('home.products')}}</div>
                    <ul style="padding-bottom:26px" class="ulis">
                        @foreach($categories as $category)
                        <li><a href="/products/categories/{{$category->id}}" title="{{$category->name}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!--contact_us-->
                <div class="Contact_us">
                    <div class="cate_title black_bg">Contact us</div>
                    <div class="Add cl">International Trade Building, hall 2, 2404, Rinmin Road, xigong district,
                        Luoyang, Henan
                    </div>
                    <div class="Phone cl">
                        Call us now:0086-18567660207 <br>
                        Whatapp:86-18567660207
                    </div>
                    <div class="Email cl">Email:info@belislaser.com</div>
                </div>
                <div class="hot_p">
                    <div class="Titlt">Hot Products</div>
                    <div class="cphide" style="margin-top: 22px;">
                        <div class="cp_list">
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="/products/40" title="E-Light BL-E2"><img
                                                src="{{asset('frontend/images/hot_e2.jpg')}}" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="/products/40" title="E-Light BL-E2">E-Light BL-E2</a></dt>
                                    <dd>{{trans('home.hot_product_1')}}</dd>
                                    <dd><a href="/products/40" title="Leam More">Leam More</a></dd>
                                </dl>
                            </div>
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="/products/40" title="Cryolipolisis"><img
                                                src="{{asset('frontend/images/hot_cr1.jpg')}}" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="/products/40" title="IPL BW-185">Cryolipolisis</a></dt>
                                    <dd>{{trans('home.hot_product_2')}}</dd>
                                    <dd><a href="/products/40" title="Leam More">Leam More</a></dd>
                                </dl>
                            </div>
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="/products/21" title="OPT SHR"><img
                                                src="{{asset('frontend/images/hot_ml1.jpg')}}" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="/products/21" title="IPL BW-185">OPT SHR</a></dt>
                                    <dd>{{trans('home.hot_product_3')}}</dd>
                                    <dd><a href="/products/21" title="Leam More">Leam More</a></dd>
                                </dl>
                            </div>
                            <div class="cp_cp">
                                <div class="img_center img_img">
                                    <a href="/products/34" title="BL-HIFU"><img
                                                src="{{asset('frontend/images/hot_hifu.jpg')}}" class="img_"/><span
                                                class="span_"></span></a>
                                </div>
                                <dl>
                                    <dt><a href="/products/34" title="IPL BW-185">BL-HIFU</a></dt>
                                    <dd>{{trans('home.hot_product_4')}}</dd>
                                    <dd><a href="/products/34" title="Leam More">Leam More</a></dd>
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