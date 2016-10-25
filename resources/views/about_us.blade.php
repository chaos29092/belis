@extends('leftbar')

@section('title',$page->title)
@section('description',$page->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/about_us.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name',trans('home.about_us'))

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{$page->name}}
        </div>
        <div class="Deta_introd">
            {!! $page->content !!}
        </div>
    </div>
@endsection

