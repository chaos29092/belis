@extends('leftbar')

@section('title','Thanks for you contact')
@section('description','Thanks for you contact')

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/about_us.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name',trans('home.request_success'))

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{trans('home.request_success')}}
        </div>
        <div class="Deta_introd">
            <p>{{trans('home.submit_ok_1')}}</p>
            <br>
            <p>{{trans('home.submit_ok_2')}}</p>
            <p>{{trans('home.submit_ok_3')}}</p>
        </div>
    </div>
@endsection

