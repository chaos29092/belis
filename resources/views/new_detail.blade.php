@extends('leftbar')

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/news.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','News Center')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            News Title
        </div>
        <div class="Deta_introd" >
            <p>news content</p>
         </div>
    </div>
    <div class="clear"></div>
@endsection

