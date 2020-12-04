<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
  ?>

<style>
    .category-nav {
        text-align: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        flex-flow: flex-start;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: flex-start;
        z-index: 100;
        position: relative;
        top: 0;
        z-index: 110;
        width: 100%;
    }
    @media (min-width: 768px) {
        .category-nav {
            width: 750px;
        }
    }
    @media (min-width: 992px) {
        .category-nav {
            width: 970px;
        }
    }
    @media (min-width: 1200px) {
        .category-nav {
            width: 1170px;
        }
    }
    .category-nav__item {
        background-color: #fff;
        line-height: 54px;
        padding: 0;
        margin: 0;
        width: 224px;
        height: 54px;
        border: 1px solid #e8e8e8;
        display: inline-block;
        text-align: center;
    }
    
    .category-nav__item:hover {
        border-color: #ff7419;
    }
    .category-nav__item:hover a {
        color: #ff7419;
    }
    .category-nav__item:hover a:before {
        color: #ff7419;
    }
    .category-nav__item a {
        display: block;
        color: #333;
        text-decoration: none;
        font-weight: 700;
        position: relative;
    }
    .category-nav__item a:before {
        font-family: "icomoon" !important;
        display: inline;
        font-size: 20px;
        color: #dbdbdb;
        position: absolute;
        left: 10px;
        top: -1px;
    }
    .category-nav__item.is-active {
        border-color: #ff7419;
    }
    .category-nav__item.is-active a {
        color: #ff7419;
    }
    .category-nav__item.is-active a:before {
        color: #ff7419;
    }
    .category-nav-select-container {
        padding: 10px;
        background-color: #fff;
        position: relative;
        width: 100%;
        z-index: 110;
        left: 0;
    }
    .category-nav-scroll-fix {
        visibility: hidden;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 80px;
        float: none;
        display: none;
    }
    @media (min-width: 1200px) {
        .category-nav-scroll-fix {
            height: 210px;
        }
    }
    .category-list__item {
        position: relative;
        margin-top: 40px;
    }
    .category-list__big-title {
        margin: 0 0 15px 0;
        padding-left: 35px;
        font-size: 22px;
        color: #333;
        position: relative;
    }
    .category-list__big-title:before {
        color: #dbdbdb;
        font-family: "icomoon" !important;
        left: 0;
        font-size: 28px;
        position: absolute;
        top: -4px;
    }
    .category-list__sub-items {
        list-style: none;
        padding: 0;
        margin: 0 0 0 35px;
    }
    .category-list__sub-items li {
        float: left;
        width: 100%;
        margin-bottom: 2px;
    }
    @media (min-width: 768px) {
        .category-list__sub-items li {
            width: 50%;
        }
    }
    .category-list__sub-items li a {
        color: #333;
        text-decoration: none;
        font-size: 12px;
    }
    .category-list__sub-items li a:hover {
        color: #ff7419;
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="category-nav position-sticky sticky-top">
                <div class="category-nav__item anchor1" data-role="anchor1"><a href="#">Ahşap İşleme - Mobilya</a></div>
                <div class="category-nav__item anchor2" data-role="anchor2"><a href="#">Ambalaj - Paketleme</a></div>
                <div class="category-nav__item anchor3" data-role="anchor3"><a href="#">Büro - Ofis - Mağaza</a></div>
                <div class="category-nav__item anchor4" data-role="anchor4"><a href="#">Çevre - Yapı</a></div>
                <div class="category-nav__item anchor5" data-role="anchor5"><a href="#">Elektronik Otomasyon</a></div>
                <div class="category-nav__item anchor6" data-role="anchor6"><a href="#">Enerji | Motor</a></div>
                <div class="category-nav__item anchor7" data-role="anchor7"><a href="#">Genel İmalat Sanayi</a></div>
                <div class="category-nav__item anchor8" data-role="anchor8"><a href="#">Gıda Endüstrisi | Mutfak</a></div>
                <div class="category-nav__item anchor9" data-role="anchor9"><a href="#">İş | İnşaat</a></div>
                <div class="category-nav__item anchor10" data-role="anchor10"><a href="#">Kağıt | Reklam | Matbaa</a></div>
                <div class="category-nav__item anchor11" data-role="anchor11"><a href="#">Medikal | Tıp | Sağlık</a></div>
                <div class="category-nav__item anchor12" data-role="anchor12"><a href="#">Metal İşleme | Metalurji</a></div>
            </div>
          <div class="category-nav-scroll-fix"></div>
            <div class="category-list">
                <div class="category-list__item anchor1 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor1-scroll">Ahşap İşleme - Mobilya</h2>
                    <ul class="category-list__sub-items">
                        <li>
                            <a href="http://www.alibaba.com/Apparel-Design-Services_pid280503?spm=a2700.9161164-noto.1.2.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.2">
    Apparel Design Services
</a>
                        </li>
                    </ul>
                </div>
                <div class="category-list__item anchor2 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor2-scroll">Ambalaj - Paketleme</h2>
                    <ul class="category-list__sub-items">
                        <li>
                            <a href="http://www.alibaba.com/Apparel-Design-Services_pid280503?spm=a2700.9161164-noto.1.2.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.2">
    Apparel Design Services
</a>
                        </li>
                    </ul>
                </div>
                <div class="category-list__item anchor3 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor3-scroll">Büro - Ofis - Mağaza</h2>
                    <ul class="category-list__sub-items">
                        <li>
                            <a href="http://www.alibaba.com/Apparel-Design-Services_pid280503?spm=a2700.9161164-noto.1.2.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.2">
    Apparel Design Services
</a>
                        </li>
                    </ul>
                </div>
                <div class="category-list__item anchor4 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor4-scroll">Çevre - Yapı</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor5 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor5-scroll">Elektronik Otomasyon</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor6 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor6-scroll">Enerji | Motor</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor7 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor7-scroll">Genel İmalat Sanayi</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor8 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor8-scroll">Gıda Endüstrisi | Mutfak</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor9 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor9-scroll">İş | İnşaat</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor10 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor10-scroll">Kağıt | Reklam | Matbaa</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor11 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor11-scroll">Medikal | Tıp | Sağlık</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor12 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor12-scroll">Metal İşleme | Metalurji</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    var anchorList = [];

    function scrollGoto(element){
        var _offset = $(window).width() > 1200 ? 250 : 80;
        $('html,body').stop().animate({scrollTop: $(element).offset().top - _offset },500);
    }


    $(function(){

        for(var i =0; i < $('.category-list__big-title').length; i++){
            anchorList.push($('[data-role="anchor'+(i+1)+'-scroll"]'));
        }

        $(".category-nav__item").on('click', function(){
            var _ind = $(this).attr('data-role').split('anchor')[1];
            scrollGoto($('[data-role="anchor'+_ind+'-scroll"]'));

            $(".category-nav__item").removeClass('is-active');
            $(this).addClass('is-active');

            $('.category-nav-select option[value="'+$(this).attr('data-role')+'"]').prop('selected',true);

        });

        $(".category-nav__item").eq(0).trigger('click');


        $('.category-nav-select').on('change', function(){
            var _ind = $(this).val().split('anchor')[1];
            scrollGoto($('[data-role="anchor'+_ind+'-scroll"]'));
            $('.category-nav__item.'+$(this).val()).trigger('click');
        })


        $(window).scroll(function(){
            var _top = $(this).scrollTop();

            if(_top >= 0){
                $('.category-nav, .category-nav-select-container').css({'position':'fixed' })
                $('.category-nav-scroll-fix').show();
            }else{
                $('.category-nav, .category-nav-select-container').css({'position':'relative'});
                $('.category-nav-scroll-fix').hide();
            }


            $(".category-nav__item").each(function(){

                var _offset = $(window).width() > 1200 ? 250 : 80;

                var currLink = $(this);
                var _ind = $(this).attr('data-role').split('anchor')[1];
                var refElement = $('[data-role="anchor'+_ind+'-scroll"]');
                if (refElement.parent().offset().top <= (_top + _offset) &&
                    refElement.parent().offset().top + refElement.parent().height() > _top)
                {
                    $(".category-nav__item").removeClass("is-active");
                    currLink.addClass("is-active");
                }
                else{
                    currLink.removeClass("is-active");
                }
            })



        })

        $(window).resize(function(){
            var _width = $(this).width();
            $(".category-nav__item.is-active").trigger('click');
            //console.log(_width);
        })


    })
</script>
