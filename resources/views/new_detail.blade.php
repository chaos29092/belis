@extends('leftbar')

@section('title',$page->title)
@section('description',$page->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/news.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','News Center')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{studly_case($page->name)}}
        </div>
        <div class="Deta_introd" >
            {!! $page->content !!}
         </div>
    </div>
    <div class="clear"></div>
@endsection

