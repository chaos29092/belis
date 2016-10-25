@extends('products_leftbar')

@section('title',$product->title)
@section('description',$product->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/products.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name',$product->name)

@section('page_content')
    <div class="goods_right">
        <div class="g_title">{{ucwords($product->name)}}</div>
        <div class="blank25"></div>
        <div class="img_center img_img zoom-small-image">
            <a href="{{$product->main_pic}}" class='cloud-zoom' id='zoom1' rel="adjustX:10, adjustY:-4"
               style="height: 502px;">
                <img src="{{$product->main_pic}}" alt="{{$product->name}}" class="img_"/>
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
                <a id="add_to_inquiry" href="/contact-us" class=" add_to_inquiry">{{trans('home.online_inquiry')}}</a>
                <a href="/contact-us" title="">{{trans('home.contact_us')}}</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="Description">
            <div class="d_title">{{trans('home.description')}}</div>
            <div class="content">
                {!! $product->content !!}
            </div>
        </div>

        {{--contact form--}}
        <div>
            <div class="contact_title">{{trans('home.quick_contact')}}</div>
            <div class="form-s">
                <div id="lib_feedback_form">
                    <form method="post" action="/contact_submit">
                        {{csrf_field()}}
                        <input type="hidden" name="url" value="{{url()->current()}}">
                        <div class="rows">
                            <p>{{trans('home.full_name')}}<i>*</i></p>
                            <input tpye="text" name="name" class="text_" required="">
                        </div>
                        <div class="rows marginr0">
                            <p>{{trans('home.email_address')}}<i>*</i></p>
                            <input tpye="text" name="email" class="text_" style="width:306px;" required="" format="Email">
                        </div>
                        <div class="free">
                            <p>Tel</p>
                            <input tpye="text" name="tel" class="text_">
                        </div>
                        <div class="message">
                            <p>{{trans('home.message')}}<i>*</i></p>
                            <textarea name="message" class="m_textarea" required></textarea>
                        </div>
                        <div class="skype">
                            <input type="submit" class="submit" value="Send Now">
                            <a href="skype:sunny-lee27?chat" title="" target="_blank" class="skype_img"></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
@endsection

