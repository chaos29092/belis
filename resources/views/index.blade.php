@extends('master')

@section('main')
<!--banner-->
<div id="banner">
    <ul class="hd">
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="bd">
        <div class="item">
            <a href="#" style="background:url({{asset('frontend/images/banner_1.jpg')}}) no-repeat center center;" title=""></a>
        </div>
        <div class="item">
            <a href="#" style="background:url({{asset('frontend/images/banner_2.jpg')}}) no-repeat center center;" title=""></a>
        </div>
        <div class="item">
            <a href="#" style="background:url({{asset('frontend/images/banner_3.jpg')}}) no-repeat center center;" title=""></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        jQuery("#banner").slide({
            mainCell: ".bd",
            autoPlay: true,
            effect: "fold",
            interTime: '5000',
            easing: "easeInQuint"
        });
    });
</script>

<!--Products-->
<div class="index_p">
    <div class="Title">
        Our Products
    </div>
    <div class="right xin_right">
        <div class="Deta_introd">
            <div class="p_list  marginr30">
                <div class="img_center p_img">
                    <a href="#"><img src="frontend/images/products/product_1.jpg" alt=""
                                                                    class="img_"/></a>
                    <span class="span_"></span>
                    <p class="sale ">SALE</p>
                </div>
                <dl class="p_wen">
                    <dt><a href="#" title="">Diode Laser BM-108</a></dt>
                    <dd class="p_conentet">Portable Diode Laser Hair Removal BM108 is the mos...</dd>
                </dl>
            </div>
            <div class="p_list  marginr30">
                <div class="img_center p_img">
                    <a href=""><img src="frontend/images/products/product_1.jpg" alt=""
                                                                    class="img_"/></a>
                    <span class="span_"></span>
                    <p class="sale ">SALE</p>
                </div>
                <dl class="p_wen">
                    <dt><a href="" title="">Diode Laser BM-108</a></dt>
                    <dd class="p_conentet">Portable Diode Laser Hair Removal BM108 is the mos...</dd>
                </dl>
            </div>
            <div class="p_list  marginr30">
                <div class="img_center p_img">
                    <a href=""><img src="frontend/images/products/product_1.jpg" alt=""
                                                                class="img_"/></a>
                    <span class="span_"></span>
                    <p class="sale ">SALE</p>
                </div>
                <dl class="p_wen">
                    <dt><a href="" title="">IPL SHR BW-187</a></dt>
                    <dd class="p_conentet">SHR stands for Super Hair Removal. Adopts Optimal ...</dd>
                </dl>
            </div>
            <div class="p_list marginr0 marginr30">
                <div class="img_center p_img">
                    <a href=""><img src="frontend/images/products/product_1.jpg" alt=""
                                                                class="img_"/></a>
                    <span class="span_"></span>
                    <p class="sale ">SALE</p>
                </div>
                <dl class="p_wen">
                    <dt><a href="" title="">IPL SHR BW-186</a></dt>
                    <dd class="p_conentet">SHR stands for Super Hair Removal. Adopts Optimal ...</dd>
                </dl>
            </div>
            <div class='clear'></div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="n_news">
    <div class="news">
        <div class="news_list">
            <div class="news_title">news</div>
            <div class="content">
                <div class="c_img img_center">
                    <a href="info/the-summary-commendation-congress-of-the-mid-year-2016_i0020.html"
                       title="The summary commendation congress of the mid-year ..."><img
                                src="frontend/images/news.jpg"
                                alt="The summary commendation congress of the mid-year ..." class="img_"><span
                                class="span_"></span></a>
                </div>
                <dl class="n_wen">
                    <dt><a href="info/the-summary-commendation-congress-of-the-mid-year-2016_i0020.html"
                           title="The summary commendation congress of the mid-year ...">The summary commendation
                            congress of the mid-year ...</a></dt>
                    <dd class="w_wen"></dd>
                    <dd><a href="info/the-summary-commendation-congress-of-the-mid-year-2016_i0020.html" class="read">READ
                            MORE -</a></dd>
                </dl>
            </div>
            <div class="content" style='margin:0'>
                <div class="c_img img_center">
                    <a href="info/2016-02-03_i0019.html" title="2016-02-03"><img src="frontend/images/news.jpg"
                                                                                 alt="" class="img_"><span
                                class="span_"></span></a>
                </div>
                <dl class="n_wen">
                    <dt><a href="info/2016-02-03_i0019.html" title="2016-02-03">2016-02-03</a></dt>
                    <dd class="w_wen">Celebrating: Our maximum sales in January --- (HIFU)High Intensity Foc...</dd>
                    <dd><a href="info/2016-02-03_i0019.html" class="read">READ MORE -</a></dd>
                </dl>
            </div>
        </div>
        <div class="contact">
            <div class="contact_title">Quick Contact</div>
            <div class="form-s">
                <div id="lib_feedback_form">
                    <form method="post" name="feedback" id="feedback">
                        <div class="rows">
                            <p>Full Name<i>*</i></p>
                            <input tpye="text" name="Name" class="text_" notnull>
                        </div>
                        <div class="rows marginr0">
                            <p>Email Address<i>*</i></p>
                            <input tpye="text" name="Email" class="text_" style="width:306px;" notnull format="Email">
                        </div>
                        <div class="free">
                            <p>Tel<i>*</i></p>
                            <input tpye="text" name="free" class="text_" notnull>
                        </div>
                        <div class="message">
                            <p>Message<i>*</i></p>
                            <textarea name="Message" class="m_textarea" notnull></textarea>
                        </div>
                        <div class="skype">
                            <input type="submit" class="submit" value="Send Now">
                            <a href="skype:bestviewmedicala?chat" title="" target="_blank" class="skype_img"></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection