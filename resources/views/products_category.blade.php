@extends('products_leftbar')

@section('title',$category->name)
@section('description',$category->description)

@section('banner')
    <a href="#" title=""
       style="background:url({{asset('frontend/images/products.jpg')}}) no-repeat center center;"></a>
@endsection

@section('page_name','Products')

@section('page_content')
    <div class="right xin_right">
        <div class="title">
            <a href="#" title="" name="Toit25"></a>{{ucwords($category->name)}}
        </div>
        <div class="Deta_introd">
            @foreach($products as $product)
                <div class="p_list  marginr30">
                    <div class="img_center p_img">
                        <a href="/products/{{$product->id}}"><img src="{{$product->category_pic}}" alt="{{$product->name}}" class="img_"/></a>
                    </div>
                    <dl class="p_wen">
                        <dt><a href="/products/{{$product->id}}" title="">{{$product->name}}</a></dt>
                        <dd class="p_conentet">{{$product->category_des}}</dd>
                    </dl>
                </div>
                @if(($loop->iteration)%3 == 0)
                    <div class='clear'></div>
                @endif
            @endforeach
            <div class='clear'></div>
        </div>
    </div>
@endsection

