<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/46ffe29256/UntitledProject/style.css">
    <style>
        .category-nav {
            text-align: center;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap ;
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
        .category-nav__item.anchor1 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor2 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor3 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor4 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor5 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor6 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor7 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor8 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor9 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor10 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor11 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor12 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor13 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor14 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor15 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor16 a:before {
            content: "\e90b";
        }
        .category-nav__item.anchor17 a:before {
            content: "\e90b";
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
            font-family: 'icomoon' !important;
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
        .category-list__item.anchor1 .category-list__big-title:before {
            content: "\e90b";
        }
        .category-list__item.anchor2 .category-list__big-title:before {
            content: "\e916";
        }
        .category-list__item.anchor3 .category-list__big-title:before {
            content: "\e917";
        }
        .category-list__item.anchor4 .category-list__big-title:before {
            content: "\e918";
        }
        .category-list__item.anchor5 .category-list__big-title:before {
            content: "\e919";
        }
        .category-list__item.anchor6 .category-list__big-title:before {
            content: "\e91a";
        }
        .category-list__item.anchor7 .category-list__big-title:before {
            content: "\e91b";
        }
        .category-list__item.anchor8 .category-list__big-title:before {
            content: "\e91c";
        }
        .category-list__item.anchor9 .category-list__big-title:before {
            content: "\e91d";
        }
        .category-list__item.anchor10 .category-list__big-title:before {
            content: "\e91e";
        }
        .category-list__item.anchor11 .category-list__big-title:before {
            content: "\e91f";
        }
        .category-list__item.anchor12 .category-list__big-title:before {
            content: "\e920";
        }
        .category-list__item.anchor13 .category-list__big-title:before {
            content: "\e941";
        }
        .category-list__item.anchor14 .category-list__big-title:before {
            content: "\e942";
        }
        .category-list__item.anchor15 .category-list__big-title:before {
            content: "\e94f";
        }
        .category-list__item.anchor16 .category-list__big-title:before {
            content: "\e999";
        }
        .category-list__item.anchor17 .category-list__big-title:before {
            content: "\e9a9";
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
            font-family: 'icomoon' !important;
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
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="category-nav-select-container">
                <select class="category-nav-select form-control visible-xs visible-sm visible-md">
                    <option value="anchor1">Ahşap İşleme - Mobilya</option>
                    <option value="anchor2">Ambalaj - Paketleme</option>
                    <option value="anchor3">Büro - Ofis - Mağaza</option>
                    <option value="anchor4">Çevre - Yapı</option>
                    <option value="anchor5"></option>
                    <option value="anchor6"></option>
                    <option value="anchor7"></option>
                    <option value="anchor8"></option>
                    <option value="anchor9"></option>
                    <option value="anchor10"></option>
                    <option value="anchor11"></option>
                    <option value="anchor12"></option>
                    <option value="anchor13"></option>
                    <option value="anchor14"></option>
                    <option value="anchor15"></option>
                    <option value="anchor16"></option>
                    <option value="anchor17"></option>
                </select>
            </div>
            <div class="category-nav position-sticky sticky-top hidden-xs hidden-sm hidden-md">
                <div class="category-nav__item anchor1" data-role="anchor1"><a href="javascript:;">Ahşap İşleme - Mobilya</a></div>
                <div class="category-nav__item anchor2" data-role="anchor2"><a href="javascript:;">Ambalaj - Paketleme</a></div>
                <div class="category-nav__item anchor3" data-role="anchor3"><a href="javascript:;">Büro - Ofis - Mağaza</a></div>
                <div class="category-nav__item anchor4" data-role="anchor4"><a href="javascript:;">Çevre - Yapı</a></div>
                <div class="category-nav__item anchor5" data-role="anchor5"><a href="javascript:;">Elektronik Otomasyon</a></div>
                <div class="category-nav__item anchor6" data-role="anchor6"><a href="javascript:;">Enerji | Motor</a></div>
                <div class="category-nav__item anchor7" data-role="anchor7"><a href="javascript:;">Genel İmalat Sanayi</a></div>
                <div class="category-nav__item anchor8" data-role="anchor8"><a href="javascript:;">Gıda Endüstrisi | Mutfak</a></div>
                <div class="category-nav__item anchor9" data-role="anchor9"><a href="javascript:;">İş | İnşaat</a></div>
                <div class="category-nav__item anchor10" data-role="anchor10"><a href="javascript:;">Kağıt | Reklam | Matbaa</a></div>
                <div class="category-nav__item anchor11" data-role="anchor11"><a href="javascript:;">Medikal | Tıp | Sağlık</a></div>
                <div class="category-nav__item anchor12" data-role="anchor12"><a href="javascript:;">Metal İşleme | Metalurji</a></div>
                <div class="category-nav__item anchor13" data-role="anchor13"><a href="javascript:;">Oyun | Eğlence</a></div>
                <div class="category-nav__item anchor14" data-role="anchor14"><a href="javascript:;">Plastik | PVC</a></div>
                <div class="category-nav__item anchor15" data-role="anchor15"><a href="javascript:;">Tarım | Bahçe | Hayvancılık</a></div>
                <div class="category-nav__item anchor16" data-role="anchor16"><a href="javascript:;">Tekstil | Deri</a></div>
                <div class="category-nav__item anchor17" data-role="anchor17"><a href="javascript:;">Vasıta | Garaj</a></div>
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

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Processing-Services_pid355?spm=a2700.9161164-noto.1.3.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.3">
                                Apparel Processing Services
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Stock_pid333?spm=a2700.9161164-noto.1.4.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.4">
                                Apparel Stock
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Boy’s-Clothing_pid100003186?spm=a2700.9161164-noto.1.5.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.5">
                                Boy’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Children’s-Clothing_pid100005769?spm=a2700.9161164-noto.1.6.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.6">
                                Children’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Coats_pid100005785?spm=a2700.9161164-noto.1.7.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.7">
                                Coats
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Costumes_pid100003238?spm=a2700.9161164-noto.1.8.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.8">
                                Costumes
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Dresses_pid100005786?spm=a2700.9161164-noto.1.9.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.9">
                                Dresses
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ethnic-Clothing_pid100003239?spm=a2700.9161164-noto.1.10.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.10">
                                Ethnic Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Garment-Accessories_pid328?spm=a2700.9161164-noto.1.11.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.11">
                                Garment Accessories
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Girls’-Clothing_pid100003199?spm=a2700.9161164-noto.1.12.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.12">
                                Girls’ Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hoodies-Sweatshirts_pid100005968?spm=a2700.9161164-noto.1.13.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.13">
                                Hoodies &amp; Sweatshirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hosiery_pid100003241?spm=a2700.9161164-noto.1.14.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.14">
                                Hosiery
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Infant-Toddlers-Clothing_pid100003234?spm=a2700.9161164-noto.1.15.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.15">
                                Infant &amp; Toddlers Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jackets_pid100005824?spm=a2700.9161164-noto.1.16.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.16">
                                Jackets
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jeans_pid100005796?spm=a2700.9161164-noto.1.17.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.17">
                                Jeans
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ladies’-Blouses-Tops_pid100005793?spm=a2700.9161164-noto.1.18.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.18">
                                Ladies’ Blouses &amp; Tops
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Mannequins_pid33801?spm=a2700.9161164-noto.1.19.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.19">
                                Mannequins
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Maternity-Clothing_pid100005837?spm=a2700.9161164-noto.1.20.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.20">
                                Maternity Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Clothing_pid100003070?spm=a2700.9161164-noto.1.21.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.21">
                                Men’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Shirts_pid100005794?spm=a2700.9161164-noto.1.22.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.22">
                                Men’s Shirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Organic-Cotton-Clothing_pid100003246?spm=a2700.9161164-noto.1.23.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.23">
                                Organic Cotton Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Other-Apparel_pid335?spm=a2700.9161164-noto.1.24.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.24">
                                Other Apparel
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Pants-Trousers_pid100005795?spm=a2700.9161164-noto.1.25.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.25">
                                Pants &amp; Trousers
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Plus-Size-Clothing_pid100003244?spm=a2700.9161164-noto.1.26.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.26">
                                Plus Size Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Sewing-Supplies_pid353?spm=a2700.9161164-noto.1.27.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.27">
                                Sewing Supplies
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Shorts_pid100005797?spm=a2700.9161164-noto.1.28.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.28">
                                Shorts
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

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Processing-Services_pid355?spm=a2700.9161164-noto.1.3.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.3">
                                Apparel Processing Services
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Stock_pid333?spm=a2700.9161164-noto.1.4.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.4">
                                Apparel Stock
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Boy’s-Clothing_pid100003186?spm=a2700.9161164-noto.1.5.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.5">
                                Boy’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Children’s-Clothing_pid100005769?spm=a2700.9161164-noto.1.6.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.6">
                                Children’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Coats_pid100005785?spm=a2700.9161164-noto.1.7.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.7">
                                Coats
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Costumes_pid100003238?spm=a2700.9161164-noto.1.8.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.8">
                                Costumes
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Dresses_pid100005786?spm=a2700.9161164-noto.1.9.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.9">
                                Dresses
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ethnic-Clothing_pid100003239?spm=a2700.9161164-noto.1.10.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.10">
                                Ethnic Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Garment-Accessories_pid328?spm=a2700.9161164-noto.1.11.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.11">
                                Garment Accessories
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Girls’-Clothing_pid100003199?spm=a2700.9161164-noto.1.12.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.12">
                                Girls’ Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hoodies-Sweatshirts_pid100005968?spm=a2700.9161164-noto.1.13.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.13">
                                Hoodies &amp; Sweatshirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hosiery_pid100003241?spm=a2700.9161164-noto.1.14.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.14">
                                Hosiery
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Infant-Toddlers-Clothing_pid100003234?spm=a2700.9161164-noto.1.15.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.15">
                                Infant &amp; Toddlers Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jackets_pid100005824?spm=a2700.9161164-noto.1.16.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.16">
                                Jackets
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jeans_pid100005796?spm=a2700.9161164-noto.1.17.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.17">
                                Jeans
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ladies’-Blouses-Tops_pid100005793?spm=a2700.9161164-noto.1.18.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.18">
                                Ladies’ Blouses &amp; Tops
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Mannequins_pid33801?spm=a2700.9161164-noto.1.19.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.19">
                                Mannequins
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Maternity-Clothing_pid100005837?spm=a2700.9161164-noto.1.20.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.20">
                                Maternity Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Clothing_pid100003070?spm=a2700.9161164-noto.1.21.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.21">
                                Men’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Shirts_pid100005794?spm=a2700.9161164-noto.1.22.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.22">
                                Men’s Shirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Organic-Cotton-Clothing_pid100003246?spm=a2700.9161164-noto.1.23.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.23">
                                Organic Cotton Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Other-Apparel_pid335?spm=a2700.9161164-noto.1.24.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.24">
                                Other Apparel
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Pants-Trousers_pid100005795?spm=a2700.9161164-noto.1.25.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.25">
                                Pants &amp; Trousers
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Plus-Size-Clothing_pid100003244?spm=a2700.9161164-noto.1.26.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.26">
                                Plus Size Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Sewing-Supplies_pid353?spm=a2700.9161164-noto.1.27.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.27">
                                Sewing Supplies
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Shorts_pid100005797?spm=a2700.9161164-noto.1.28.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.28">
                                Shorts
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

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Processing-Services_pid355?spm=a2700.9161164-noto.1.3.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.3">
                                Apparel Processing Services
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Apparel-Stock_pid333?spm=a2700.9161164-noto.1.4.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.4">
                                Apparel Stock
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Boy’s-Clothing_pid100003186?spm=a2700.9161164-noto.1.5.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.5">
                                Boy’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Children’s-Clothing_pid100005769?spm=a2700.9161164-noto.1.6.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.6">
                                Children’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Coats_pid100005785?spm=a2700.9161164-noto.1.7.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.7">
                                Coats
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Costumes_pid100003238?spm=a2700.9161164-noto.1.8.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.8">
                                Costumes
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Dresses_pid100005786?spm=a2700.9161164-noto.1.9.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.9">
                                Dresses
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ethnic-Clothing_pid100003239?spm=a2700.9161164-noto.1.10.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.10">
                                Ethnic Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Garment-Accessories_pid328?spm=a2700.9161164-noto.1.11.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.11">
                                Garment Accessories
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Girls’-Clothing_pid100003199?spm=a2700.9161164-noto.1.12.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.12">
                                Girls’ Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hoodies-Sweatshirts_pid100005968?spm=a2700.9161164-noto.1.13.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.13">
                                Hoodies &amp; Sweatshirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Hosiery_pid100003241?spm=a2700.9161164-noto.1.14.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.14">
                                Hosiery
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Infant-Toddlers-Clothing_pid100003234?spm=a2700.9161164-noto.1.15.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.15">
                                Infant &amp; Toddlers Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jackets_pid100005824?spm=a2700.9161164-noto.1.16.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.16">
                                Jackets
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Jeans_pid100005796?spm=a2700.9161164-noto.1.17.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.17">
                                Jeans
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Ladies’-Blouses-Tops_pid100005793?spm=a2700.9161164-noto.1.18.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.18">
                                Ladies’ Blouses &amp; Tops
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Mannequins_pid33801?spm=a2700.9161164-noto.1.19.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.19">
                                Mannequins
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Maternity-Clothing_pid100005837?spm=a2700.9161164-noto.1.20.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.20">
                                Maternity Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Clothing_pid100003070?spm=a2700.9161164-noto.1.21.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.21">
                                Men’s Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Men’s-Shirts_pid100005794?spm=a2700.9161164-noto.1.22.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.22">
                                Men’s Shirts
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Organic-Cotton-Clothing_pid100003246?spm=a2700.9161164-noto.1.23.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.23">
                                Organic Cotton Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Other-Apparel_pid335?spm=a2700.9161164-noto.1.24.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.24">
                                Other Apparel
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Pants-Trousers_pid100005795?spm=a2700.9161164-noto.1.25.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.25">
                                Pants &amp; Trousers
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Plus-Size-Clothing_pid100003244?spm=a2700.9161164-noto.1.26.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.26">
                                Plus Size Clothing
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Sewing-Supplies_pid353?spm=a2700.9161164-noto.1.27.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.27">
                                Sewing Supplies
                            </a>
                        </li>

                        <li>
                            <a href="http://www.alibaba.com/Shorts_pid100005797?spm=a2700.9161164-noto.1.28.iITDeJ" data-spm-anchor-id="a2700.9161164-noto.1.28">
                                Shorts
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
                <div class="category-list__item anchor13 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor13-scroll">Oyun | Eğlence</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor14 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor14-scroll">Plastik | PVC</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor15 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor15-scroll">Tarım | Bahçe | Hayvancılık</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor16 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor16-scroll">Tekstil | Deri</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
                <div class="category-list__item anchor17 clearfix">
                    <h2 class="category-list__big-title" data-role="anchor17-scroll">Vasıta | Garaj</h2>
                    <ul class="category-list__sub-items"></ul>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
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
</body>
</html>


 
