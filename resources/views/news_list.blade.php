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
            <div class="list_info">
                <div class="img_centers">
                    <a href="new_detail"><img src="/frontend/images/new_1.jpg" class="img_"/></a>
                    <span class="span_"></span>
                </div>
                <dl class="right_wen">
                    <dt><a href="#">new title 1</a></dt>
                    <dd style="font-size:12px;margin:0">2016-08-17</dd>
                    <dd>new des</dd>
                </dl>
            </div>
            <div class="list_info">
                <div class="img_centers">
                    <a href="2016-02-03_i0019.html"><img src="../u_file/1602/photo/ea3edf1909.jpg" class="img_"/></a>
                    <span class="span_"></span>
                </div>
                <dl class="right_wen">
                    <dt><a href="2016-02-03_i0019.html">2016-02-03</a></dt>
                    <dd style="font-size:12px;margin:0">2016-03-25</dd>
                    <dd>Celebrating: Our maximum sales in January --- (HIFU)High Intensity Focused Ultrasound</dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="clear">
@endsection

