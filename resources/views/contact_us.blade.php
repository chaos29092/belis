@extends('leftbar')

@section('title',$page->title)
@section('description',$page->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/contact.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name',trans('home.contact_us'))

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{$page->name}}
        </div>
        <div class="Deta_introd" >
            {!! $page->content !!}
        </div>
        {{--contact form--}}
        <div>
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
    <div class="clear">
@endsection

