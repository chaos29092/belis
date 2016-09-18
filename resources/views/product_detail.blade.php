@extends('products_leftbar')

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/products.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name',$product->name)

@section('page_content')
    <div class="goods_right">
        <div class="g_title">{{$product->name}}</div>
        <div class="blank25"></div>
        <div class="img_center img_img zoom-small-image">
            <a href="{{$product->main_pic}}" class='cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4"
               style="height: 502px;">
                <img src="{{$product->main_pic}}" alt="IPL BW-185" class="img_"/>
            </a>
            <span class="span_"></span>
        </div>
        <div class="g_xright">
            <div class="go_title">{{$product->name}}</div>
            <div class="feature" style="word-wrap: break-word; word-break: normal; ">
                {{$product->des}}
            </div>
            <div class="blank20"></div>
            <div class="inquirys">
                <a id="add_to_inquiry" href="/contact-us" class=" add_to_inquiry">Online inquiry</a>
                <a href="/contact-us" title="">Contact us</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="Description">
            <div class="d_title">Description</div>
            <div class="content">
                {!! $product->content !!}
            </div>
        </div>
    </div>
@endsection

