@extends('leftbar')

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/news.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','News Center')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            News Center
        </div>
        <div class="Deta_introd">
            @foreach($news as $new)
            <div class="list_info">
                <div class="img_centers">
                    <a href="/news/{{$new->id}}"><img src="{{$new->main_pic}}" class="img_"/></a>
                    <span class="span_"></span>
                </div>
                <dl class="right_wen">
                    <dt><a href="/news/{{$new->id}}">{{studly_case($new->name)}}</a></dt>
                    <dd style="font-size:12px;margin:0">{{$new->updated_at}}</dd>
                    <dd>{{str_limit($new->description,30)}}</dd>
                </dl>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clear"></div>
@endsection

