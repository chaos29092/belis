@extends('leftbar')

@section('title',$page->title)
@section('description',$page->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/contact.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','Contact us')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{$page->name}}
        </div>
        <div class="Deta_introd" >
            {!! $page->content !!}
        </div>
    </div>
    <div class="clear">
@endsection

