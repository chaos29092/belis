@extends('leftbar')

@section('title',trans('title.new_center_title'))
@section('description',trans('title.new_center_description'))

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/news.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','News Center')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            {{trans('home.new_center')}}
        </div>
        <div class="Deta_introd">
            @foreach($news as $new)
            <div class="list_info">
                <div class="img_centers">
                    <a href="/news/{{$new->id}}"><img src="{{$new->main_pic}}" title="{{$new->name}}" class="img_"/></a>
                    <span class="span_"></span>
                </div>
                <dl class="right_wen">
                    <dt><a href="/news/{{$new->id}}">{{ucwords($new->name)}}</a></dt>
                    <dd style="font-size:12px;margin:0">{{$new->updated_at}}</dd>
                    <dd>{{str_limit($new->description,30)}}</dd>
                </dl>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clear"></div>
@endsection

