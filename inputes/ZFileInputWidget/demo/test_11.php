

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="PbumCKKsAYC-FjGeLaMxfMQMmr42i4YMN2GlL3I-UJp_8p5O9cBH0OZRROZvzHBOsDzd8XPj0EdDCPBbKG80tw==">
    <title>FileInput Widget</title>


    <!-- -------------------------- -->
    <!-- ---------  Assets ----------->

    <!-- ---------  Styles ----------->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.1/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/render/asrorz/mdb/css/mdb.min.css">

    <link href="/render/asrorz/ven/css/theme.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/kartik-v/yii2-widget-activeform/src/assets/css/activeform.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/render/asrorz/css/ALL.css">
    <link rel="stylesheet" href="/render/asrorz/css/eyuf.css">



    <!-- ---------  Scripts ----------->

    <!--  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mobile-detect@1.4.4/mobile-detect.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/cookiejs@1.0.26/dist/cookie.min.js"></script>
    <script type="text/javascript" src="/render/asrorz/ven/js/theme.js"></script>

    <script type="text/javascript" src="/render/asrorz/js/ALL.js"></script>
    <script type="text/javascript" src="/render/asrorz/js/eyuf.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/copy-to-clipboard@3.3.1/index.js"></script>

    <!--
    $this->fileJs('https://cdn.jsdelivr.net/npm/copy-to-clipboard@3.3.1/example/index.js')
    -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mburger-css@1.3.3/dist/mburger.css">
    <link rel="stylesheet" href="render/menus/ZMMmenuWidget/assets/mmenu/mmenuextension.css">


    <!-- -------------------------- -->
    <!-- ---------  Assets ----------->


    <link type="image/x-icon" href="/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/hint.css@2.6.0/hint.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/css/fileinput.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.2/dist/mmenu.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/mhead-js@2.0.0/dist/mhead.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/mburger-css@1.3.3/dist/mburger.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css@3.4.6/css/flag-icon.css" rel="stylesheet">
    <link href="/assets/4dcac9b0/css/activeform.css" rel="stylesheet">
    <link href="/assets/2a0d7989/css/form.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.css" rel="stylesheet">
    <link href="render/animo/All/assets/all/css/ConferenceNavbar/toolbar.css" rel="stylesheet">
    <link href="render/animo/All/assets/loaders/CSS JS/SimpleLoader/loader/css/loading.css" rel="stylesheet">


    <link href="render/menus/ZMMmenuWidget/assets/mmenu/fix-modal.css" rel="stylesheet"
    <link href="render/menus/ZMMmenuWidget/assets/mmenu/mmenuextension.css" rel="stylesheet">
    <link href="render/menus/ZMMmenuWidget/assets/mmenu-theme/theme_eyuf.css" rel="stylesheet">
    <link href="render/animo/All/assets/all/css/ConferenceNavbar/style.css" rel="stylesheet">
    <link href="render/ALL/vendroid/assets/theme/vendroid/css/theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/jqueryui@1.11.1/jquery-ui.min.css" rel="stylesheet">
    <link href="render/ALL/vendroid/assets/theme/vendroid/css/theme-responsive.min.css" rel="stylesheet">
    <link href="/assets/fdfe3921/css/kv-bootstrap-notify.css" rel="stylesheet">
    <link href="vendor/kartik-v/yii2-krajee-base/src/assets/css/animate.css" rel="stylesheet">
    <link href="vendor/kartik-v/yii2-krajee-base/src/assets/css/kv-widgets.css" rel="stylesheet">
    <link href="vendor/kartik-v/yii2-widget-alert/assets/css/alert.css" rel="stylesheet">


 <!--   <link href="/publish/action/Special view/assets/SpecialViewstyle.css" rel="stylesheet">-->

    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-secondaryw1 {
            color:  !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w1 {
            color:  !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style></style>
    <style>#rv_spk {
            position: absolute;
            left: -9999px;
            top: -9999px;
            /*font-size: 3em;*/
            cursor: pointer;
            z-index: 1100;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            line-height: 47px;
            text-align: center;
            background: #000000 url(/render/audios/assets/audio/responciveVoice/rupor.png) no-repeat 50% 50%;
            -webkit-background-size: 28px;
            background-size: 28px;
            -webkit-box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.3);
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.3);
        }
        .vd_chat-menu{
            background-color: #3d799c;
        }
        #yz-text{
            display: none;
        }</style>
    <style>    .kt-sticky-toolbar{
            background-color: #3d799c;
            margin-top: 15px;

        }
        .bb-c{
            color: #3d799c !important;
        }</style>
    <style>

        .home-mmenu{
            margin-right: 12px !important;
        }
    </style>
    <style>

        .searching{

            float: left !important;

        }
        :root {
            --space-unit: 1em;
        }
        .icon{
            color: #0D47A1 !important;

        }
        .border-search{
            border: 2px solid #669BF3 !important;
        }

        .border-search{
            border-radius: 20px;
            height: 60px;
            padding-left: 8px;
            width: 60%;

        }


        .kr {

            position: relative;
            display: inline-block;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-top: 0;
            margin-right: 6px !important;
            background-color: white !important;
        }

        .ki {
            width: 2.2em !important;
            height: 2.2em!important;
            padding: 0;
            border: none;
            color: transparent;

            border-radius: 50em;
            transition: width .3s cubic-bezier(.215, .61, .355, 1), box-shadow .3s, background-color .3s;
        }

        .ki::-webkit-input-placeholder {
            color: transparent
        }

        .ki::-moz-placeholder {
            opacity: 0;
            color: transparent
        }

        .ki:-ms-input-placeholder {
            color: transparent
        }

        .ki:-moz-placeholder {
            color: transparent
        }

        .ki:hover {
            background-color: #f2f2f2;
            cursor: pointer
        }

        .ki:focus, .ki.ks {
            background-color: #fff;
            width: 20em !important;
            padding: 0 2.4em 0 0.75em;
            outline: none;
            box-shadow: 0 1px 8px rgba(0, 0, 0, .085), 0 8px 24px rgba(0, 0, 0, .1), 0 0 0 2px #2a6df4;
            color: #0D47A1;
            cursor: auto;
            -webkit-user-select: auto;
            -moz-user-select: auto;
            -ms-user-select: auto;
            user-select: auto
        }

        .ki:focus::-webkit-input-placeholder, .ki.ks::-webkit-input-placeholder {
            color: #79797c;
        }

        .ki:focus::-moz-placeholder, .ki.ks::-moz-placeholder {
            opacity: 1;
            color: #79797c;
        }

        .ki:focus:-ms-input-placeholder, .ki.ks:-ms-input-placeholder {
            color: #79797c;
        }

        .ki:focus:-moz-placeholder, .ki.ks:-moz-placeholder {
            color: #79797c;
        }

        .ki:focus + .ko {
            pointer-events: auto;
        }

        .ki::-webkit-search-decoration, .ki::-webkit-search-cancel-button, .ki::-webkit-search-results-button, .ki::-webkit-search-results-decoration {
            display: none;
        }

        .ko {
            position: absolute;
            top: 2px;
            right: 2px;
            height: calc(2.2em - 4px);
            width: calc(2.2em - 4px);
            border-radius: 50%;
            border: none;
            z-index: 1;
            pointer-events: none;
            transition: background-color .3s;
            background-color: #fff;
        }

    </style>
    <style>    .m-b{
            margin-bottom: 10px;
        }
        .sample{
            padding: 30px!important;
        }
        .navbar-easy{
            margin: 10px;

        }
        .specialEye{
            font-size: 25px !important;
            color: #0d47a1;
        }

        .speciel_box{
            text-decoration: none !important;
            border-bottom: none !important;


        }
        .sampleColor{
            color: #3d799c ;
        }
        .specialTitle{
            text-align: center ;

        }
    </style>
    <style>        .mega-link{
            padding-left: 1px !important;
        }
        .border-bg{
            border: 2px solid #0D47A1 !important;
        }

        .sv{
            display: inline-block !important;

            padding: 0 !important;
            padding-top: 10px !important;
        }

        .chat-body{
            border-radius: 30px !important;
        }

        .user-message{
            font-weight: normal;
            font-size: 16px;
            margin: 0;
        }
        .closing{
            font-size: 16px;
        }
        .list-wrapper li{
            cursor: pointer;
        }
        .list-wrapper-item:hover{
            background: #e0e0e0;
        }
        .icon-eye:hover{
            background-color: #fff;
            color: #1fae66!important;
            cursor: pointer
        }

    </style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-messagePjax {
            color: #0d47a1 !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w17 {
            color: #0d47a1 !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>
        .vend-icon-color{
            color: #0d47a1 !important;
        }
        /*.my-div{
            position: relative;
            max-width: 100%;
            max-height: 100%;

        }
        .my-div2{
            display: inline-block;
            max-width: 90px;
            max-height: 70px;
        }*/
        .my-title{
            bacground: #1fae66 !important;
        }
        .title-popover{
            font-size: 16px;
            /* margin-left: 40px;*/
        }
    </style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w19 {
            color: #0d47a1 !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w20 {
            color: #0d47a1 !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>            .border-bg{
            border: 2px solid #0D47A1 !important;
        }

        .sx
        {
            display: inline-block !important;
            padding: 0 !important;
            padding-top: 0px !important;

        }

        .notify-link:hover{
            text-decoration: none;
        }
        .notify-icon{
            margin-top: 10px;
        }
        .user-message{
            width: 90%;
            font-weight: normal;
            font-size: 16px !important;
            margin: 0;
        }
        .closing{
            font-size: 16px;
        }
        .list-wrapper li a{
            color: black;
        }
        .user-name{
            margin: 0;
        } </style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w23 {
            color: #0d47a1 !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>            .border-bg{
            border: 2px solid #0D47A1 !important;
        }

        .sx
        {
            display: inline-block !important;
            padding: 0 !important;
            padding-top: 10px !important;

        }

        .closing{
            font-size: 16px;
        }
        .friend-li{
            max-height: 150px;
        }</style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w27 {
            color: #0d47a1  !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <style>       .sz{
            /*border-radius: 1px;*/
            box-shadow: 0 0 4px #000 ;
            font-size: 30px !important;
            margin-left: 5px !important;

            /*  border: 2px solid #0b71a6 !important; */
            /*border-radius: 25% !important;*/
            background-color:#0b71a6 !important; ;
        }


        .flag-icon-en {
            background-image: url(/publish/yarner/flag-icon-css/flags/4x3/us.svg);
        }</style>
    <style>    .content-carolina{
            padding: 2px !important;
        }
        .content-list{
            overflow: unset;
        }
        .role-user{
            font-size: 12px !important;
        }

        .add{
            padding: 7px !important;

        }
        .name-n{
            /*padding: 0 !important;
            padding-left: 5px !important;
            padding-bottom: 15px !important;*/
            margin-top: 0 !important;
        }
        .user-photo{
            padding-top: 7px !important;
        }

        .add{
            margin-left: 15px !important;
        }
        .userStatus{
            height: 30px;
            margin: 2px 0;
        }
        .userStatus a{
            padding: 0 !important;
        }
        .userStatus a:hover{
            background-color: unset !important;
        }


        .carolinaTextColor{
            color: #424242;
            font-weight: bold;
            line-height: 18px;
            padding-top: 5px;

        }
        .roleTextColor{
            color: #424242;
        }
        .pastgaStrelka span img{
            width: 96%;
        }
        .pastgaStrelka::after{
            margin: 20px 10px 0;
            font-size: 22px;
            color: #424242;
        }</style>
    <style>             .color-icon{
            color: transparent;
        }
        .ovr-button{
            overflow : visible!important;

        }
        .iconColor-w32 {
            color:  !important;
            font-size: px !important;
            /*  padding: 5px !important;
              padding-right: 10px !important;*/
        }
        .my-btn-icon{
            position: relative;
            left: 3px;
        }
        .counter{
            margin-left: -21px !important;
        }</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/js/fileinput.js"></script>
    <script src="render/animo/All/assets/loaders/CSS JS/SimpleLoader/loader/css/loading.css"></script>
    <script src="/render/audios/assets/audio/responciveVoice/jquery.liTranslit.js"></script>
    <script src="/render/audios/assets/audio/responciveVoice/responsivevoice.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.2/dist/mmenu.polyfills.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.2/dist/mmenu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mhead-js@2.0.0/dist/mhead.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jqueryui@1.11.1/jquery-ui.min.js"></script>
    <script src="/publish/action/Special view/assets/jquery.cookie.min.js"></script>
    <script src="/publish/action/Special view/assets/specialView.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-slimscroll@1.3.8/jquery.slimscroll.js"></script>
    <script>window.notify_edb1516d = {"showProgressbar":true,"timer":300,"placement":{"from":"top","align":"right"},"element":"body","position":null,"allow_dismiss":true,"newest_on_top":true,"offset":20,"spacing":10,"z_index":1031,"mouse_over":null,"animate":{"enter":" animated rubberBand","exit":" animated zoomInUp"},"onShow":null,"onShown":null,"onClose":null,"onClosed":null,"icon_type":"class","type":"success","template":"\u003Cdiv id=\u0022w35\u0022 class=\u0022col-xs-11 col-sm-3 alert alert-{0}\u0022 role=\u0022alert\u0022 data-notify=\u0022container\u0022\u003E\u003Cbutton type=\u0022button\u0022 class=\u0022close\u0022 data-notify=\u0022dismiss\u0022\u003E\u003Cspan aria-hidden=\u0022true\u0022\u003E\u0026times;\u003C\/span\u003E\u003C\/button\u003E\n\u003Cspan data-notify=\u0022icon\u0022\u003E\u003C\/span\u003E\n\u003Cspan data-notify=\u0022title\u0022\u003E{1}\u003C\/span\u003E\n\u003Chr class=\u0022kv-alert-separator\u0022\u003E\n\u003Cspan data-notify=\u0022message\u0022\u003E{2}\u003C\/span\u003E\n\u003Cdiv class=\u0022progress kv-progress-bar\u0022 data-notify=\u0022progressbar\u0022\u003E\u003Cdiv class=\u0022progress-bar progress-bar-{0}\u0022 role=\u0022progressbar\u0022 aria-valuenow=\u00220\u0022 aria-valuemin=\u00220\u0022 aria-valuemax=\u0022100\u0022 style=\u0022100\u0022\u003E\u003C\/div\u003E\u003C\/div\u003E\n\u003Ca href=\u0022{3}\u0022 data-notify=\u0022url\u0022 target=\u0022{4}\u0022\u003E\u003C\/a\u003E\u003C\/div\u003E"};
    </script>
    <style>
        body{
            overflow-x:hidden !important;
        }
    </style>

</head>

<body class="white-skin">






<div id="asrorz_simple_loading" class="simple-loading simple-loading-modernClock"></div>

<div id="rv_spk" onselectstart="return false" class="load_rv"></div>



<span id="yz-text" style="overflow-wrap: break-word;"></span>        <ul class="kt-sticky-toolbar">
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success"
        title="">
        <a href="https://t.me/joinchat/JNR4XVQ-Yf-2q0zoIF8dmw" target="_blank"><i class="fa fa-paper-plane bb-c"
                                                                                  aria-hidden="true" style="font-size: 18px;"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success"
        title="">
        <a href="https://eyuf.uz/" target="_blank"><i class="fa fa-phone bb-c"
                                                      aria-hidden="true" style="25px"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success"
        title="">
        <a href="https://eyuf.uz/" target="_blank"><i class="fa fa-envelope  bb-c"
                                                      aria-hidden="true" style="25px"></i></a>
    </li>

    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success"
        title="">
        <a href="https://eyuf.uz/" target="_blank"><i class="fa fa-globe bb-c"
                                                      aria-hidden="true" style="25px"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success"
        title="">
        <a href="https://eyuf.uz/"><i class="fa fa-comments bb-c" aria-hidden="true" style="25px"></i></a>
    </li>
</ul>        <nav id="menu"  style="">
    <ul class="listview-icons">
        <li>
            <a href="/cores/main/index.aspx"><i class="fa fa-home home-mmenu"></i>Главная страница</a>
        </li>
        <li>                <a href="#" class="">                 <i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;  Документ6</a></li>
        <li>                <a href="/admin/core-document-type/index.aspx" class="">                 <i class="fas fa-book"></i>&nbsp;&nbsp;  Типы Документов</a></li>
        <li>                <a href="/admin/core-faq/index.aspx" class="">                 <i class="fas fa-question-circle"></i>&nbsp;&nbsp;  FAQ</a></li>
        <li>                <a href="/admin/core-faq-type/index.aspx" class="">                 <i class="far fa-question-circle"></i>&nbsp;&nbsp;  Категории FAQ</a></li>
        <li>                <a href="/admin/core-news/index.aspx" class="">                 <i class="far fa-newspaper"></i>&nbsp;&nbsp;  Новости</a></li>
        <li>                <a href="/logics/accounter/add-invoice.aspx" class="">                 <i class="fa fa-institution"></i>&nbsp;&nbsp; Добавить расходы</a></li>
        <li>                <a href="/logics/scholar/add-doc.aspx" class="">                 <i class="fa fa-crop"></i>&nbsp;&nbsp; Добавить документ</a></li>
        <li>                <a href="/logics/scholar/add-info.aspx" class="">                 <i class="fa fa-dashboard"></i>&nbsp;&nbsp; Добавить информацию</a></li>
        <li>                <a href="/logics/scholar/address.aspx" class="">                 <i class="fa fa-line-chart"></i>&nbsp;&nbsp; Адрес</a></li>
        <li>                <a href="/cores/chat/index.aspx" class="">                 <i class="fa fa-desktop"></i>&nbsp;&nbsp; Чат</a></li>
        <li>                <a href="/logics/scholar/create-doc.aspx" class="">                 <i class="fa fa-save"></i>&nbsp;&nbsp; Добавить информацию</a></li>
        <li>                <a href="/logics/scholar/doclist.aspx" class="">                 <i class="fa fa-film"></i>&nbsp;&nbsp; Список Категории faq</a></li>
        <li>                <a href="/logics/scholar/faq.aspx" class="">                 <i class="fa fa-gift"></i>&nbsp;&nbsp; Часто задаваемые вопросы</a></li>
        <li>                <a href="/logics/scholar/invoice.aspx" class="">                 <i class="fa fa-database"></i>&nbsp;&nbsp; Мои расходы</a></li>
        <li>                <a href="/logics/scholar/manual.aspx" class="">                 <i class="fa fa-calendar"></i>&nbsp;&nbsp; Просмотр  Справочника</a></li>
        <li>                <a href="/cores/news/index.aspx" class="">                 <i class="fa fa-crop"></i>&nbsp;&nbsp; Новости</a></li>
        <li>                <a href="/logics/scholar/reports.aspx" class="">                 <i class="fa fa-gift"></i>&nbsp;&nbsp; Просмотр Отчета</a></li>
        <li>                <a href="/logics/scholar/scholars.aspx" class="">                 <i class="fa fa-gg-circle"></i>&nbsp;&nbsp; Список стипендиантов</a></li>
        <li>                <a href="/logics/scholar/settings.aspx" class="">                 <i class="fa fa-calendar"></i>&nbsp;&nbsp; Изменение парола</a></li>
        <li>                <a href="/logics/scholar/settings.aspx" class="">                 <i class="fa fa-calendar"></i>&nbsp;&nbsp; Изменение парола</a></li>
        <li>                <a href="/logics/scholar/statistics.aspx" class="">                 <i class="fa fa-credit-card"></i>&nbsp;&nbsp; Статистика</a></li>
        <li>                <a href="/logics/scholar/table.aspx" class="">                 <i class="fa fa-gift"></i>&nbsp;&nbsp; Таблицы</a></li>
    </ul>
</nav><div id="page">

    <!--Navbarco-->

    <nav class="navbar navbar-expand-sm navbar-dark ilon-mask siticky-navbar">

        <span id="hamburger" class="Sticky">
            <a href="#menu" class="mburger mburger--collapse">
                <b></b>
                <b></b>
                <b></b>
            </a>
       </span>
        <!-- Navbar brand -->

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav right-navbar-items mr-auto ">
                <!--
                <li class="nav-item leftNavbarItem active ">
                    <a class="nav-link" href="#"><i class="fa fa-home bg"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item leftNavbarItem" >
                    <a class="nav-link" href="#"><i class="fa fa-cog bg" ></i>Features</a>
                </li>
                <li class="nav-item leftNavbarItem">
                    <a class="nav-link" href="#"><i class="fas fa-dollar-sign bg"></i>Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item dropdown-toggle firstSubmenu" href="#">Submenu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle firstSubmenu" href="#">Submenu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


     -->
            </ul>

            <ul class="navbar-nav my_left_ul">

                <li class="nav-item mx-auto mt-2 d-flex">

                    <!--   -->
                    <div class="d-flex align-items-center">
                        <form class="kr js-expandable-search searching">
                            <label class="sr-only" for="searchInputX">Поиск</label>
                            <input class="border-search ki  js-expandable-search__input" type="search" name="search" value="" id="searchInputTop" placeholder="Поиск..."  >
                            <button class="reset ko nn">
                                <svg class="icon" viewBox="1 2 22 22">
                                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"stroke="currentColor" fill="none" stroke-miterlimit="2">
                                        <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                                        <circle cx="10" cy="10" r="7"></circle>
                                    </g>
                                </svg>
                            </button>
                        </form>                </div>

                    <!--Easy View-->
                    <div class="ml-1 mr-2 d-flex align-items-center">

                        <div class="speciel_relative mobile ">
                            <div class="forPadding">
                                <div class="special_box dropdown ">


                                    <div class="icon_accessibility dataTooltip" data-toggle="dropdown" data-placement="bottom" title="Special features" aria-expanded="false">
                                        <a href="#" class="speciel_box mt-2">
                                            <!--<img src="/publish/action/Special view/assets/eye.png" alt="">-->
                                            <!-- <span>Special features</span>--><i class="fas fa-eye specialEye m-b"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right specialViewArea no-propagation  navbar-easy sample">
                                        <!--<div class="triangle2"></div>-->

                                        <div class="appearance">
                                            <p class="specialTitle">View</p>

                                            <div class="d-flex justify-content-between">
                                                <div class="squareAppearances">
                                                    <div class="squareBox spcNormal" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Common mode">A</div>
                                                </div>

                                                <div class="squareAppearances">
                                                    <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Black-and-white mode">A</div>
                                                </div>

                                                <div class="squareAppearances">
                                                    <div class="squareBox spcDark" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dark mode">A</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="appearance">
                                            <p class="specialTitle">Font size</p>
                                            <div class="block blocked">
                                                <div class="sliderText sampleColor">Increase by <span class="range sampleColor">0</span>%</div>
                                                <div id="fontSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                                            </div>

                                            <p class="specialTitle">Scale</p>
                                            <div class="block">
                                                <div class="sliderZoom sampleColor">Increase by <span class="range sampleColor">0</span>%</div>
                                                <div id="zoomSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                                            </div>

                                        </div>

                                        <div class="clearfix"></div>
                                    </div>


                                </div>
                            </div>
                        </div>                </div>

                    <div id="p0" data-pjax-container="" data-pjax-push-state data-pjax-replace-state data-pjax-timeout="1000">                <div class="vd_mega-menu-wrapper mr-2"   >
                            <div class="vd_mega-menu pull-right">
                                <ul class="mega-ul">

                                    <!--<div class="my-div2">
    <div class="d-inline-blok my-div">-->


                                    <li class="one-icon mega-li">
                                        <a href="#" class="mega-link" data-action="click-trigger">
                                            <span class="mega-icon vend-icon-color"><i class="fa fa-envelope"></i></span>
                                            <span class="badge vd_bg-red"></span>
                                        </a>


                                        <!--<a href="#" class="btn-floating btn-info btn-sm" data-action="click-trigger">
                                            <i class="fa fa-envelope vend-icon-color"></i>

                                        </a>-->
                                        <!--<span class="badge counter"></span>-->

                                        <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target" style="display: none;">
                                            <div class="child-menu">
                                                <div class="title my-title">
                                                    <span class="title-popover">Сообшения</span>
                                                    <div class="vd_panel-menu">
                    <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="w17"
                                            title="read all"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="read all"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-eye iconColor-w17"></i>&nbsp


             </a>


                    </span>
                                                        <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="messagePjax"
                                            title="Обновление"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="Обновление"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-sync iconColor-messagePjax"></i>&nbsp


             </a>


                    </span>

                                                    </div>
                                                </div>


                                                <div class="child-menu" id="message">


                                                    <div class="content-list content-image">
                                                        <div id="w14" class="mCustomScrollbar _mCS_2" style="overflow:hidden;">

                                                            <ul class="list-wrapper">

                                                            </ul>

                                                        </div>
                                                        <div class="closing text-center" style="">
                                                            <a href="/core/tester/chat.aspx">
                                                                Посмотреть все сообщения <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div> <!-- child-menu -->
                                        </div>   <!-- vd_mega-menu-content -->


                                    </li>
                                    <!--</div>
                                     </div>-->        <!--<div class="my-div2">
    <div class="d-inline-blok my-div">-->


                                    <li class="one-icon mega-li">
                                        <a href="#" class="mega-link" data-action="click-trigger">
                                            <span class="mega-icon vend-icon-color"><i class="fa fa-bell"></i></span>
                                            <span class="badge vd_bg-red">1</span>
                                        </a>


                                        <!--<a href="#" class="btn-floating btn-info btn-sm" data-action="click-trigger">
                                            <i class="fa fa-bell vend-icon-color"></i>

                                        </a>-->
                                        <!--<span class="badge counter">1</span>-->

                                        <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target" style="display: none;">
                                            <div class="child-menu">
                                                <div class="title my-title">
                                                    <span class="title-popover">Уведомления</span>
                                                    <div class="vd_panel-menu">
                    <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="w23"
                                            title="read all"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="read all"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-eye iconColor-w23"></i>&nbsp


             </a>


                    </span>
                                                        <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="messagePjax"
                                            title="Обновление"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="Обновление"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-sync iconColor-messagePjax"></i>&nbsp


             </a>


                    </span>

                                                    </div>
                                                </div>

                                                <div class="child-menu">
                                                    <div class="content-list content-image">
                                                        <div id="w18" class="mCustomScrollbar _mCS_2" style="overflow:hidden;">
                                                            <ul class="list-wrapper pd-lr-10">         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">'Здравствуйте Уважаемый <b>Qudratov</b>!'</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-11 18:36:51 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">'Здравствуйте Уважаемый <b>Qudratov</b>!'</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-11 19:00:02 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">'Здравствуйте Уважаемый <b>Qudratov</b>!'</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-11 19:16:07 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">'Здравствуйте Уважаемый <b>Qudratov</b>!'</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 16:08:32 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">'Здравствуйте Уважаемый <b>Qudratov</b>!'</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 17:44:35 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">7</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 17:54:23 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">7</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 18:06:31 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">7</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 18:45:55 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">7</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 18:53:54 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class="menu-text">
                                                                            <div>
                                                                                <p class="user-name">Jahongir</p>
                                                                                <p class="d-inline-block user-message text-truncate">7</p>
                                                                            </div>
                                                                            <div class="menu-info d-flex justify-content-between align-items-center">
                                                                                <span class="menu-date"> 2020-02-13 18:58:16 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-eye"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div> </a>
                                                                </li>         <li><a href="" class="notify-link">
                                                                        <div class="menu-icon notify-icon">
                                                                            <i class="fa fa-user"></i>

                                                                        </div>
                                                                        <div class=
                                                                             "menu-text">  <p  class="user-name">Jahongir</p>
                                                                            <p class="user-message text-truncate">7</p>
                                                                            <div class="menu-info d-flex justify-content-between">
                                                                                <span class="menu-date"> 2020-02-13 18:58:30 </span>
                                                                                <span class="menu-action">
                            <span class="menu-action-icon menuAction icon-eye"
                                  data-original-title="Mark as Unread"
                                  data-toggle="tooltip" data-placement="bottom">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </span>
                                                                            </div>
                                                                        </div>
                                                                </li></a>
                                                            </ul>
                                                        </div>
                                                        <div class="closing text-center" style="">
                                                            <a href="#">
                                                                Посмотреть все уведомления <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div> <!-- child-menu -->
                                        </div>   <!-- vd_mega-menu-content -->


                                    </li>
                                    <!--</div>
                                     </div>-->        <!--<div class="my-div2">
    <div class="d-inline-blok my-div">-->


                                    <li class="one-icon mega-li">
                                        <a href="#" class="mega-link" data-action="click-trigger">
                                            <span class="mega-icon vend-icon-color"><i class="fa fa-users"></i></span>
                                            <span class="badge vd_bg-red"></span>
                                        </a>


                                        <!--<a href="#" class="btn-floating btn-info btn-sm" data-action="click-trigger">
                                            <i class="fa fa-users vend-icon-color"></i>

                                        </a>-->
                                        <!--<span class="badge counter"></span>-->

                                        <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target" style="display: none;">
                                            <div class="child-menu">
                                                <div class="title my-title">
                                                    <span class="title-popover">Друзья</span>
                                                    <div class="vd_panel-menu">
                    <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="w27"
                                            title="read all"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="read all"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-eye iconColor-w27"></i>&nbsp


             </a>


                    </span>
                                                        <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                    <a
                                            href="#"
                                            target="_self"
                                            data-method="post"


                                            id="messagePjax"
                                            title="Обновление"
                                            data-toggle="tooltip"

                                            data-pjax="1"
                                            class="  ovr-button      hint--bottom hint--info hint--small hint--bounce hint--rounded "
                                            aria-label="Обновление"
                                            aria-hidden="true"
                                    >
                                 <i class="fa fa-sync iconColor-messagePjax"></i>&nbsp


             </a>


                    </span>

                                                    </div>
                                                </div>

                                                <div class="child-menu" id="friend">
                                                    <div id="w24"  class="content-grid column-xs-2 column-sm-3 height-xs-4">
                                                        <ul class="list-wrapper" >

                                                        </ul>
                                                    </div>
                                                    <div class="closing text-center">
                                                        <a href="#">Посмотреть все запросы
                                                            <i class="fa fa-angle-double-right"></i></a>

                                                    </div>
                                                </div>

                                            </div> <!-- child-menu -->
                                        </div>   <!-- vd_mega-menu-content -->


                                    </li>
                                    <!--</div>
                                     </div>-->                        </ul>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mr-2">
                        <a href="/uz/core/tester/asror/main.aspx?path=render\inputs\ZFileInputWidget\active" class="mx-1"><span class="flag-icon flag-icon-uz sz"></span></a>
                        <a href="/core/tester/asror/main.aspx" class="mx-1"><span class="flag-icon flag-icon-ru sz"></span></a>
                        <a href="/en/core/tester/asror/main.aspx?path=render\inputs\ZFileInputWidget\active" class="mx-1"><span class="flag-icon flag-icon-en sz"></span></a>

                    </div>

                    <div>

                        <div class="vd_mega-menu-wrapper">
                            <div class="vd_mega-menu pull-right">
                                <ul class="mega-ul">
                                    <li id="top-menu-profile" class="profile mega-li add">

                                        <a href="#" class="pastgaStrelka mega-link dropdown-toggle" data-toggle="dropdown" data-action="click-trigger">
                        <span class="mega-image user-photo">
                          <img src='/publish/image/user/male.png'>
                        </span>
                                            <div class="carolinaTextColor mega-name carolina-user name-n">
                                                <p class="userTextColor m-0">Qudratov</p>
                                                <p class="roleTextColor role-user m-0">Jahongir&nbsp(scholar)</p>
                                            </div>

                                        </a>


                                        <div class="vd_mega-menu-content  width-xs-3  left-xs left-sm dropdown-menu gg content-carolina" >
                                            <div class="child-menu">
                                                <div class="content-list content-menu">
                                                    <ul class="list-wrapper pd-lr-10">


                                                        <li class="userStatus">
                                                            <a href="/logics/scholar/index.aspx">
                                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                                <div class="menu-text pr-0">Мой профиль</div>
                                                                <!--<div class="menu-badge">
                                                                    <div class="badge vd_bg-red"></div>
                                                                </div>-->
                                                            </a>
                                                        </li>

                                                        <!--<li class="userStatus">
                                                          <a href="/admin/core-message.aspx">
                                                            <div class="menu-icon"><i class="fas fa-envelope"></i></div>
                                                                <div class="menu-text">Сообщения</div>
                                                            <div class="menu-badge">
                                                               <div class="badge vd_bg-red"></div>
                                                            </div>
                                                            </a>
                                                        </li>-->



                                                        <li class="userStatus">
                                                            <a href="/admin/core-setting.aspx">
                                                                <div class="menu-icon"><i class="fa fa-cogs"></i></div>
                                                                <div class="menu-text pr-0">Настройки</div>
                                                                <!--<div class="menu-badge">
                                                                    <div class="badge vd_bg-red"></div>
                                                                </div>-->
                                                            </a>
                                                        </li>

                                                        <!-- <li class="userStatus">
                                                           <a href="/admin/core-notify.aspx">
                                                             <div class="menu-icon"><i class=" fa fa-bell"></i></div>
                                                                 <div class="menu-text pr-0">Уведомления</div>
                                                             <div class="menu-badge">
                                                                 <div class="badge vd_bg-red"></div>
                                                             </div>
                                                             </a>
                                                         </li>-->

                                                        <li class="userStatus">
                                                            <a href="/cores/auth/logout.aspx">
                                                                <div class="menu-icon"><i class="fas fa-sign-out-alt"></i></div>
                                                                <div class="menu-text pr-0">Выход</div>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div><div class="modal fade" id="registration" role="dialog" style="z-index: 10000">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header text-center bg-primary text-white">

                                        <h4 class="modal-title w-100">Регистрация в систему</h4>
                                    </div>
                                    <div class="modal-body m-0 p-0">

                                        <div class="col-lg-12 col-md-8 col-sm-6" style="overflow: hidden;">
                                            <iframe src="/cores/auth/register-frame.aspx" height="750" width="100%" class="border-0"></iframe>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div><div class="modal fade" id="loginNavbar" role="dialog" style="z-index: 10000">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header text-center bg-primary text-white">

                                        <h4 class="modal-title w-100">Регистрация в систему</h4>
                                    </div>
                                    <div class="modal-body m-0 p-0">

                                        <div class="col-lg-12 col-md-8 col-sm-6" style="overflow: hidden;">
                                            <iframe src="/cores/auth/login-frame.aspx" height="600" width="100%" class="border-0"></iframe>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>


                </li>
                <!--<li class="nav-item mt-2 mx-auto li_top d-flex">

                </li> -->
                <li class="nav-item pt-3 mt-1">

                    <!--    <div class="profilwid">


                        </div> -->

                    <!--     <div class="mysettingbtn px-3">



                    </div>   -->

                </li>

            </ul>
        </div>


    </nav>




    <div class="pr-2 pl-2 pt-4">

        <div id="w37" class="alert-danger">
            <div id="w38" class="alert fade in kv-alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                Требуется подтверждение по электронной почте. Для получения дополнительной информации: <a href="/logics/scholar/index.aspx">Профиль</a>

            </div>
        </div>        <form id="w0" class="form-horizontal kv-form-horizontal kv-form-bs4" action="#" method="post" enctype="multipart/form-data" data-pjax="0">
            <input type="hidden" name="_csrf" value="PbumCKKsAYC-FjGeLaMxfMQMmr42i4YMN2GlL3I-UJp_8p5O9cBH0OZRROZvzHBOsDzd8XPj0EdDCPBbKG80tw==">     <div class="floating-right text-right mt-0 mb-3">             <button
                        data-target=""
                        type="submit"
                        id="secondaryw1"
                        title=""
                        data-toggle="tooltip"

                        data-pjax=""
                        class="btn btn-rounded ovr-button   btn-outline-primary waves-effect   hint--top hint--info hint--medium hint--bounce hint--rounded "
                        aria-label=""
                        aria-hidden="true" name="submitBtn">

                    сохранить
                </button>

            </div>

            <div class="highlight-addon row field-coreinput-zfileinputwidget">

                <div class="col-md-12">
                    <div class="file-loading">
                        <input id="coreinput-zfileinputwidget" name="CoreInput[zfileinputwidget][]" type="file" multiplem class="woienfoiwe">
                    </div>
                    <div class="file-inputs" id="file-inputs">

                    </div>

                    <div class="help-block invalid-feedback"></div>
                </div>
            </div>




            <div class="floating-right text-right mt-2">             <button
                        data-target=""
                        type="submit"
                        id="w1"
                        title=""
                        data-toggle="tooltip"

                        data-pjax=""
                        class="btn btn-rounded ovr-button   btn-outline-primary waves-effect   hint--top hint--info hint--medium hint--bounce hint--rounded "
                        aria-label=""
                        aria-hidden="true" name="submitBtn">

                    сохранить
                </button>

            </div></form>
    </div>


    <!-- Footer -->
    <!--    <div class="footer text-center align-text-center pt-3 border border-left-0 border-right-0 border-primary">
            <p>
                © 2020  <span class="text-primary">Ўзбекистон Республикаси Вазирлар Махкамаси хузуридаги Эл-юрт умиди жамгармаси</span>
            </p>
        </div>-->
    <!-- Footer -->
</div>

<script src="/assets/be571235/yii.js"></script>
<script src="/assets/be571235/yii.activeForm.js"></script>
<script src="/assets/4dcac9b0/js/activeform.js"></script>
<script src="/assets/2a0d7989/js/form.js"></script>
<script src="/assets/76173b77/jquery.pjax.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.js"></script>
<script src="/assets/fdfe3921/js/bootstrap-notify.js"></script>
<script src="/assets/909a609a/js/kv-widgets.js"></script>
<script>jQuery(function ($) {
        var $el=jQuery("#w0 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
        $('#secondaryw1')
            .on('click', )
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('#w1')
            .on('click', )
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        jQuery("#w5").kvFormBuilder({});
        $(document).ready(function() {
            $("#coreinput-zfileinputwidget").fileinput({
                language: 'en',
                showCaption: true,
                showBrowse: true,
                showPreview: true,
                showRemove: true,
                showUpload: true,
                showUploadStats: true,
                showCancel: true,
                showPause: null,
                showClose: null,
                showUploadedThumbs: true,
                showConsoleLogs: true,
                browseOnZoneClick: false,
                autoReplace: false,
                autoOrientImage: function () { // applicable for JPEG images only and non ios safari
                    var ua = window.navigator.userAgent, webkit = !!ua.match(/WebKit/i),
                        iOS = !!ua.match(/iP(od|ad|hone)/i), iOSSafari = iOS && webkit && !ua.match(/CriOS/i);
                    return !iOSSafari;
                },
                autoOrientImageInitial: true,
                required: true,
                rtl: false,
                hideThumbnailContent: false,
                encodeUrl: true,
                generateFileId: null,
                previewClass: '',
                captionClass: '',
                frameClass: 'krajee-default',
                mainClass: 'file-caption-main',
                mainTemplate: null,
                purifyHtml: true,
                fileSizeGetter: null,
                initialCaption: 'Zfileinputwidget',
                initialPreview: [
                    "\/upload\/coreinput\/zfileinputwidget\/7\/20200204_101136.jpg"
                ],
                initialPreviewDelimiter: '*$$*',
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [
                    {
                        "caption": "20200204_101136.jpg",
                        "key": "20200204_101136.jpg"
                    }
                ],
                initialPreviewThumbTags: [],
                previewThumbTags: {},
                initialPreviewShowDelete: true,
                initialPreviewDownloadUrl: '',
                removeFromPreviewOnError: false,
                deleteUrl: "/core/tester/asror/delete-file.aspx?modelClassName=CoreInput&attribute=zfileinputwidget&id=7",
                deleteExtraData: {},
                overwriteInitial: false,
                previewZoomButtonIcons: {
                    prev: '<i class="glyphicon glyphicon-triangle-left"></i>',
                    next: '<i class="glyphicon glyphicon-triangle-right"></i>',
                    toggleheader: '<i class="glyphicon glyphicon-resize-vertical"></i>',
                    fullscreen: '<i class="glyphicon glyphicon-fullscreen"></i>',
                    borderless: '<i class="glyphicon glyphicon-resize-full"></i>',
                    close: '<i class="glyphicon glyphicon-remove"></i>'
                },
                previewZoomButtonClasses: {
                    prev: 'btn btn-navigate',
                    next: 'btn btn-navigate',
                    toggleheader: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                    fullscreen: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                    borderless: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                    close: 'btn btn-sm btn-kv btn-default btn-outline-secondary'
                },
                previewTemplates: {},
                previewContentTemplates: {},
                preferIconicPreview: false,
                preferIconicZoomPreview: false,
                allowedFileTypes: null,
                allowedFileExtensions: null,
                allowedPreviewTypes: undefined,
                allowedPreviewMimeTypes: null,
                allowedPreviewExtensions: null,
                disabledPreviewTypes: undefined,
                disabledPreviewExtensions: ['msi', 'exe', 'com', 'zip', 'rar', 'app', 'vb', 'scr'],
                disabledPreviewMimeTypes: null,
                defaultPreviewContent: null,
                customLayoutTags: {},
                customPreviewTags: {},
                previewFileIcon: '<i class="glyphicon glyphicon-file"></i>',
                previewFileIconClass: 'file-other-icon',
                previewFileIconSettings: {},
                previewFileExtSettings: {},
                buttonLabelClass: 'hidden-xs',
                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>&nbsp;',
                browseClass: 'btn btn-primary',
                removeIcon: '<i class="fas fa-trash"></i>',
                removeClass: 'btn btn-default btn-secondary',
                cancelIcon: '<i class="glyphicon glyphicon-ban-circle"></i>',
                cancelClass: 'btn btn-default btn-secondary',
                pauseIcon: '<i class="glyphicon glyphicon-pause"></i>',
                pauseClass: 'btn btn-default btn-secondary',
                uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
                uploadClass: 'btn btn-default btn-secondary',
                uploadUrl: "/core/tester/asror/upload.aspx?modelClassName=CoreInput&attribute=zfileinputwidget",
                uploadUrlThumb: "",
                uploadAsync: false,
                uploadParamNames: {
                    chunkCount: 'chunkCount',
                    chunkIndex: 'chunkIndex',
                    chunkSize: 'chunkSize',
                    chunkSizeStart: 'chunkSizeStart',
                    chunksUploaded: 'chunksUploaded',
                    fileBlob: 'fileBlob',
                    fileId: 'fileId',
                    fileName: 'fileName',
                    fileRelativePath: 'fileRelativePath',
                    fileSize: 'fileSize',
                    retryCount: 'retryCount'
                },
                maxAjaxThreads: 5,
                processDelay: 100,
                queueDelay: 10, // must be lesser than process delay
                progressDelay: 0, // must be lesser than process delay
                enableResumableUpload: false,
                resumableUploadOptions: {
                    fallback: null,
                    testUrl: null, // used for checking status of chunks/ files previously / partially uploaded
                    chunkSize: 2 * 1024, // in KB
                    maxThreads: 4,
                    maxRetries: 3,
                    showErrorLog: true
                },
                uploadExtraData: {},
                zoomModalHeight: 480,
                minImageWidth: null,
                minImageHeight: null,
                maxImageWidth: null,
                maxImageHeight: null,
                resizeImage: false,
                resizePreference: 'width',
                resizeQuality: 0.92,
                resizeDefaultImageType: 'image/jpeg',
                resizeIfSizeMoreThan: 0, // in KB
                minFileSize: 0,
                maxFileSize: 0,
                maxFilePreviewSize: 25600, // 25 MB
                minFileCount: 0,
                maxFileCount: 5,
                validateInitialCount: false,
                msgValidationErrorClass: 'text-danger',
                msgValidationErrorIcon: '<i class="glyphicon glyphicon-exclamation-sign"></i> ',
                msgErrorClass: 'file-error-message',
                progressThumbClass: 'progress-bar progress-bar-striped active',
                progressClass: 'progress-bar bg-success progress-bar-success progress-bar-striped active',
                progressInfoClass: 'progress-bar bg-info progress-bar-info progress-bar-striped active',
                progressCompleteClass: 'progress-bar bg-success progress-bar-success',
                progressPauseClass: 'progress-bar bg-primary progress-bar-primary progress-bar-striped active',
                progressErrorClass: 'progress-bar bg-danger progress-bar-danger',
                progressUploadThreshold: 99,
                previewFileType: 'image',
                elCaptionContainer: null,
                elCaptionText: null,
                elPreviewContainer: null,
                elPreviewImage: null,
                elPreviewStatus: null,
                elErrorContainer: null,
                slugCallback: function(filename) {
                    return filename;
                },
                dropZoneEnabled: true,
                dropZoneTitleClass: 'file-drop-zone-title',
                fileActionSettings: {},
                otherActionButtons: '',
                textEncoding: 'UTF-8',
                ajaxSettings: {},
                ajaxDeleteSettings: {},
                showAjaxErrorDetails: true,
                mergeAjaxCallbacks: false,
                mergeAjaxDeleteCallbacks: false,
                retryErrorUploads: true,
                reversePreviewOrder: false,
                usePdfRenderer: function () {
                    //noinspection JSUnresolvedVariable
                    var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
                    return !!navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/i) || isIE11;
                },
                pdfRendererUrl: '',
                pdfRendererTemplate: '<iframe class="kv-preview-data file-preview-pdf" src="{renderer}?file={data}" {style}></iframe>'
            }).on('filesorted', function(e, params) {
                console.log('file sorted', e, params);
            }).on('fileuploaded', function(e, params) {
                console.log('file uploaded', e, params);
            }).on('filebatchuploadsuccess',         function(event, files) {
                var el =  $("[name='CoreInput[zfileinputwidget]']");
                var filesEl = el.val();
                var filesArr = [];
                /*    if(filesEl.length > 0)
                     filesArr = JSON.parse(filesEl);*/

                $.each(files.files, function( fileName, file ) {
                    fileName = file.name;
                    filesArr.push({name: fileName});

                });



                console.error(filesArr);
                $.each(filesArr, function(fileName, file){
                    fileName =  file.name;
                    var inputs = "<input type='hidden' id='coreinput-zfileinputwidget' name='CoreInput[zfileinputwidget][]' value='"+fileName+"' class='"+fileName+"'>";
                    $('.file-inputs').append(inputs);

                    $('.file-caption-name').attr('title', fileName);

                });


                el.val(JSON.stringify(filesArr));




            }).on('filedeleted',         function(event, id, index) {
                var el =  $("[name='CoreInput[zfileinputwidget]']");
                var filesEl = el.val();
                var filesArr = [];
                $.each( JSON.stringify(filesEl), function( fileName, file ) {
                    if(id === file.name) return ;
                    fileName = file.name;
                    filesArr.push(fileName);
                });
                el.val(JSON.stringify(filesArr));
            })
                .on('filezoomshow',         function(event, files) {
                    $("[class='modal-header']").attr('style', 'background: white');
                    $("[class='glyphicon glyphicon-resize-vertical']").attr('class', 'fas fa-fw fa-arrows-alt-v');
                    $("[class='glyphicon glyphicon-fullscreen']").attr('class', 'fas fa-fw fa-arrows-alt');
                    $("[class='glyphicon glyphicon-resize-full']").attr('class', 'fas fa-fw fa-external-link-alt');
                    $("[class='glyphicon glyphicon-remove']").attr('class', 'fas fa-fw fa-times');
                }).on('filebatchselected',         function(event, files) {
                reformatIcons();
            });
            reformatIcons();
            function reformatIcons(){

                $("[class='glyphicon glyphicon-trash']").attr('class', 'fas fa-trash');
                $("[class='glyphicon glyphicon-zoom-in']").attr('class', 'fas fa-search-plus');
                $("[class='glyphicon glyphicon-move']").attr('class', 'fas fa-arrows-alt');
                $("[class='glyphicon glyphicon-file']").attr('class', 'fas fa-file kv-caption-icon');
                $("[class='glyphicon glyphicon-upload']").attr('class', 'fas fa-upload');
                $("[class='glyphicon glyphicon-ban-circle']").attr('class', 'fas fa-ban');
                $("[class='glyphicon glyphicon-folder-open']").attr('class', 'fas fa-folder-open');

            }

        });

        jQuery('#w0').yiiActiveForm([{"id":"coreinput-zfileinputwidget","name":"zfileinputwidget","container":".field-coreinput-zfileinputwidget","input":"#coreinput-zfileinputwidget","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100}], {"validationUrl":"\/tester\/asror\/main.aspx?path=render\\inputs\\ZFileInputWidget\\active"});

        var options  = {
            minimum: 0.08,
            easing: 'ease',
            positionUsing: '',
            speed: 500,
            trickle: true,
            trickleRate: 0.02,
            trickleSpeed: 800,
            showSpinner: true,
            barSelector: '[role="bar"]',
            spinnerSelector: '[role="spinner"]',
            parent: 'body',
            template: '<div class="bar" role="bar">' +
                '<div class="peg"></div>' +
                '</div>' +
                '<div class="spinner" role="spinner">' +
                '<div class="spinner-icon"></div>' +
                '</div>'
        };

        NProgress.configure(options);

        NProgress.start();
        NProgress.done();        	jQuery(document).on('pjax:start', function() { NProgress.start(); });
        jQuery(document).on('pjax:end',   function() { NProgress.done();  });	        jQuery(document).on('ajaxStart',    function() { NProgress.start(); });
        jQuery(document).on('ajaxComplete', function() { NProgress.done();  });
        jQuery(document).on('pjax:end', function () {
            SimpleLoading.stop();
        });

        jQuery(document).ready(function () {
            SimpleLoading.stop();
        });
        $("#rv_spk").on('mousedown', function() {
            return false;
        });

        function speak() {
            $('#rv_spk').select(function () {
                return false;
            });
            var selection;
            var rv_text;
            $(window).mouseup(function (event) {
                var xPos = e.pageX;
                var yPos = e.pageY;
                if (e.target.id != "rv_spk") {
                    $("#rv_spk").css({
                        'left': xPos + 'px',
                        'top': yPos + 'px',
                    });
                }
                if (window.getSelection) {
                    selection = window.getSelection();
                } else if (document.selection) {
                    selection = document.selection.createRange();
                }
                if (selection.isCollapsed == false) {
                    $("#rv_spk").fadeIn('slow');
                } else {
                    $("#rv_spk").hide().removeClass('load_rv');
                    responsiveVoice.cancel();
                }
                // console.log(selection.toString());
                $('#yz-text').text(selection.toString());
                var str;
                $('#yz-text').liTranslit({
                    reg: '"а"="a","и"="i","р"="r","ш"="ş","б"="b","й"="y","с"="s","ъ"="‘","в"="v","к"="k","т"="t","ғ"="g‘","г"="g","л"="l","у"="u","қ"="k","д"="d","м"="m","ф"="f","ў"="o‘","е"="e","н"="n","х"="x","ҳ"="h","ж"="j","о"="o","ц"="ts" ,"з"="z","п"="p","ч"="ç","я"="ya","нг"="ng","pub"="pu‘b"',
                    /*elAlias: $('.demo2_translit'),*/
                    translated: function (el, text, eventType) {
                        str = text;
                        str = str.replace(/_/g, " ");
                        // $('#test').text(str);
                    }
                });
                // console.log(str);
                rv_text = selection.toString();
                rv_text = str;
            });

            $("#rv_spk").click(function (event) {
                responsiveVoice.speak(rv_text, "Russian Female", {
                    onstart: function () {
                        $('#rv_spk').addClass('load_rv');
                    }, onend: function () {
                        $('#rv_spk').removeClass('load_rv');
                    }
                });
            });
            $('a, label, button, option').each(function () {
                $(this).click(function () {
                    $('#yz-text').text($(this).text());
                    $('#yz-text').liTranslit({
                        reg: '"а"="a","и"="i","р"="r","ш"="ş","б"="b","й"="y","с"="s","ъ"="‘","в"="v","к"="k","т"="t","ғ"="g‘","г"="g","л"="l","у"="u","қ"="k","д"="d","м"="m","ф"="f","ў"="o‘","е"="e","н"="n","х"="h","ҳ"="h","ж"="j","о"="o","ц"="ts" ,"з"="z","п"="p","ч"="ç","я"="ya","нг"="ng","pub"="pu‘b"',
                        /*elAlias: $('.demo2_translit'),*/
                        translated: function (el, text, eventType) {
                            str = text;
                            str = str.replace(/_/g, " ");
                            // $('#test').text(str);
                        }
                    });
                    rv_text2 = $(this).text();
                    rv_text2 = str;
                    responsiveVoice.speak(rv_text2, "Russian Female");
                }, function () {
                    responsiveVoice.cancel();
                    $('#yz-text').text('');
                });
            })
        }

        window.onload = speak;
        /*
                $('#tooltip').tooltip();
                $('#tooltip1').tooltip();
                $('#tooltip2').tooltip();
                $('#tooltip3').tooltip();
                $('#tooltip4').tooltip();*/



        /*
        $(function () {
            var e, t, n = $(window), i = ($("html"),
                $("body")), a = $("body, html");
            String.prototype.capitalize = function () {
                return this.charAt(0).toUpperCase() + this.slice(1)
            },

                function () {

                }()
        });
        */


        $(document).ready(function() {

            var options = {
                "extensions": {
                    all: [
                        "theme-dark", //  theme-dark | theme-black | theme-light  / theme-eyuf
                        "pagedim-black", // pagedim-black | pagedim-white | pagedim

                        /*
                        * https://mmenujs.com/docs/extensions/border-style.html
                        * */

                        "border-full", // border-none | border-full

                        "position-back", // position-back / "position-right"  | position-top | position-bottom | position-front
                        "shadow-page",  // shadow-page | shadow-menu | shadow-panels

                        /* TO USE EFFECTS ENABLE "menu-effect-slide" (P.S the same with  the 'fx-menu-slide' */
                        "fx-menu-slide",
                        "fx-panels-slide-0",// "fx-panels-none",// fx-panels-slide-0 | fx-panels-slide-100 / fx-menu-slide,

                        //  "{istileview}", / tileview : true
                        // "", / fullscreen

                        //  "" // "multiline",
                        //  "{islistview-justify}" //   "listview-justify" : true,


                    ],
                },
                hooks: {
                    "openPanel:start": function (event) { console.log("ZALLMmenuWidget | openPanel:start: " + panel.id) },
                    "openPanel:finish": (panel) => {
                        console.log("Finished opening panel: " + panel.id);
                    },
                    "closeAllPanels:before": (panel) => {
                        console.log("Before closing all panel: " + panel.id);
                    },
                    "closeAllPanels:after": (panel) => {
                        console.log("After closing all panel: " + panel.id);
                    },
                    "closePanel:before": (panel) => {
                        console.log("Before closing panel: " + panel.id);
                    },
                    "closePanel:after": (panel) => {
                        console.log("After closing panel: " + panel.id);
                    },
                    "openPanel:before": (panel) => {
                        console.log("Before opening panel xx: " + panel.id);
                    },

                    "openPanel:after": (panel) => {
                        console.log("After opening panel: " + panel.id);
                    },
                    "setSelected:before": (panel) => {
                        console.log("Before set selected: " + panel.id);
                    },
                    "setSelected:after": (panel) => {
                        console.log("After set selected: " + panel.id);
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/dividers.html
                * */
                "dividers": {
                    add: false,
                    addTo: "panels"
                },
                /*
                * https://mmenujs.com/docs/addons/drag.html
                * */
                drag: {
                    open: false,
                    node: null
                },
                /*"sectionIndexer": false,*/
                /*
                * https://mmenujs.com/docs/addons/dropdown.html
                * */

                "dropdown": {
                    drop: false,
                    event: "click", // hover | click hover | hover click      e
                    fitViewport: true,
                    position: {
                        of: null,
                        x: "left",
                        y: "bottom"  // bottom
                    },
                    tip: false,
                    offset: {
                        button: {
                            x: 100,
                            y: 100
                        }
                    },
                    viewport: {
                        x: 20,
                        y: 20
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/fixed-elements.html
                */
                fixedElements: {
                    insertMethod: "append", // "prepend"
                    insertSelector: "body"
                },


                /*
                * https://mmenujs.com/docs/addons/iconbar.html
                */
                /* iconbar: {
                     use: false,
                     position: "left", // right , left
                     top: [
     "<a href='#\/'><i class='fa fa-home'><\/i>cc<\/a>",
     "<a href='#\/'><i class='fa fa-home'><\/i>cc<\/a>"
 ],
                     bottom: [
     "<a href='#\/'><i class='fa fa-home'><\/i>aa<\/a>",
     "<a href='#\/'><i class='fa fa-home'><\/i>cc<\/a>"
 ],
                     type: null // "tabs"
                 },*/

                rag: {
                    open: false
                },
                // https://mmenujs.com/docs/addons/back-button.html
                backButton: {
                    close: true
                },
                // https://mmenujs.com/docs/addons/columns.html
                columns: {
                    add: false,
                    visible: {
                        max: 3,
                        min: 1
                    }
                },
                /*
                * https://mmenujs.com/docs/addons/auto-height.html
                */
                autoHeight: {
                    height: "default" // auto | highest
                },

                pageScroll: {
                    scroll: true,
                    update: false
                },

                /*
                * https://mmenujs.com/docs/addons/counters.html
                * */

                counters: {
                    add: true,
                    addTo: "panels",
                    count: true
                },
                /*
                * https://mmenujs.com/docs/addons/keyboard-navigation.html
                */
                keyboardNavigation: {
                    enable: false,
                    enhance: false
                },

                /*
                * https://mmenujs.com/docs/addons/icon-panels.html
                * */
                iconPanels: {
                    add:false,
                    hideDivider: true,
                    hideNavbar: false,
                    visible: "first" // max 3
                },
                /*"navbar": false,*/

                navbar: {
                    title: "Главное меню",
                    add: true,
                    sticky: true,
                    titleLink: "parent", // anchor | none
                },

                onClick: {
                    close: false,
                    preventDefault: null, // true | false
                    setSelected: true,
                },
                slidingSubmenus: true,
                wrappers: [],

                /*
                * https://mmenujs.com/docs/addons/navbars.html
                * */
                navbars: [
                    {
                        content: [
                            '<div class="zlogo"><img src="/zetimg/<?=App?>/logo.jpg" width="80"></div>'
                        ],
                        position: "top"
                    },
                    {
                        use: true,
                        content: [
                            'searchfield', // breadcrumbs | close | next | prev | searchfield | title
                        ],
                        position: "top", // bottom
                        type: null // tabs
                        // {...} objects
                    },
                    {
                        content: [
                            'breadcrumbs','prev', 'next'
                        ]
                    }


                ],
                /*
                * https://mmenujs.com/docs/addons/lazy-submenus.html
                * */
                lazySubmenus: {
                    load: false
                },

                /**
                 *
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                searchfield: {
                    add: true,
                    addTo: "panels",// panel
                    cansel: true,
                    noResults: "No results found.", //false
                    placeholder: "Найти", // something
                    search: true,
                    showSubPanels: true,
                    showTextItems: true,
                    panel: {
                        add: false,
                        dividers: true,
                        fx: "none",
                        id: null,
                        splash: null,
                        title: "search",
                    },
                },
                /*
                * https://mmenujs.com/docs/addons/set-selected.html
                * */
                setSelected: {
                    current: true,
                    hover: !0,
                    parent: !0
                },
                /*
                * https://mmenujs.com/docs/addons/sidebar.html
                * */
                sidebar: {
                    collapsed: {
                        use: 768, // true , false , usable meausure (example: 768 )
                        blockMenu: true,  // false
                        hideNavbar: true, // false
                        hideDivider: false // true
                    },
                    /* expanded:{
                         use: false,
                         initial: "open" // remember
                     },
 */
                    expanded: {
                        use: 1440, // false, //true  usable meausure (example: 1440 )
                        initial: "remember" // open
                    }
                },

                /*
                * https://mmenujs.com/docs/core/options.html
                * */
            };

            var configs = {
                offCanvas: {
                    page: {
                        selector: "#page"
                    }
                },
                /**
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                "searchfield": {
                    "clear": true,
                    form: null, // false
                    input: null,
                    submit: true
                },
                autoHeight: {
                    // auto height options
                },
                navbars: {
                    breadcrumbs: {
                        separator: "/",
                        removeFirst: false
                    }
                },
                /*height: {
                    // max: 40     iconPanels
                }, */
                width: {
                    // max: 40
                },
                /*
                * https://mmenujs.com/docs/addons/page-scroll.html
                * */
                pageScroll: {
                    scrollOffset: 0,
                    updateOffset: 50
                }

            };

            var menu = new Mmenu("#menu", options, configs);
            var api = menu.API;
            var t = $("#hamburger").children(".mburger");
            api.bind("close:finish", function () {
                setTimeout(function () {
                    t.attr("href", "#menu");
                }, 100)
            }),
                api.bind("open:finish", function () {
                    setTimeout(function () {
                        t.attr("href", "#page");
                    }, 100)
                });


            $(function () {
                $('.mm-listitem').each(function () {
                    var firstchild = $(this).children('.mm-listitem__text');
                    var secondchild = $(this).children('.mm-btn');
                    var myhref = secondchild.attr("href");

                    firstchild.attr("href", myhref);
                    firstchild.addClass("mm-listitem__btn");

                });
            });
        });

        $(document).on('click', '.nn', function ()  {
            var abl = $('#searchInputTop').val();
            location.href = "?search=" + abl;
        });


        $('#w14').slimscroll({
            width: '',
            railVisible: true,
            allowPageScroll: true,
            touchScrollStep: 1000,
            height:'320',
        });



        $('#messagePjax')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('#w17')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('.mega-link').click(function() {
            /*        debugger*/
            Cookies.set('clicked', true, {path : '/'})
        });
        $('#scroll').slimscroll({
            width: '320px',
            railVisible: true,
            allowPageScroll: true,
            touchScrollStep: 1000,
            height:'400px',
        });


        $('#w19')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('#w20')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('#w18').slimscroll({
            width: '',
            railVisible: true,
            allowPageScroll: true,
            touchScrollStep: 1000,
            height:'320',
        });

        $('.icon-eye i').on('click', function() {
            $(this).removeClass('fa-eye-slash')
                .addClass('fa-eye');
        })

        $('#w23')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        $('#w24').slimscroll({
            width: '',
            railVisible: true,
            allowPageScroll: true,
            touchScrollStep: 1000,
            height: '320',
        });      /*  $('.fa.fa-users').on('click', function(){
        cliced=true;
    });
    */
        /*
        $('.fa-check').on('click', function(){
            $("#messagePjax").click();
        });*/


        $('.fa-times').on('click', function() {
            $(this).parent().parent().parent().parent().parent().hide();
        });


        $('.fa-check').on('click', function() {
            $(this).parent().parent().parent().parent().parent().hide();
        });

        $('#w27')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        jQuery(document).pjax("#p0 a", {"type":"POST","dataType":"html","scrollOffset":0,"maxCacheLength":20,"pushRedirect":false,"replaceRedirect":true,"skipOuterContainers":false,"ieRedirectCompatibility":true,"push":true,"replace":true,"timeout":1000,"scrollTo":false,"container":"#p0"});
        jQuery(document).on("submit", "#p0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"type":"POST","dataType":"html","scrollOffset":0,"maxCacheLength":20,"pushRedirect":false,"replaceRedirect":true,"skipOuterContainers":false,"ieRedirectCompatibility":true,"push":true,"replace":true,"timeout":1000,"scrollTo":false,"container":"#p0"});});
        jQuery(document).on('pjax:end', function () {

            console.warn('pjax:end | Before Check: ' + cookie.get('canRun'));

            if (cookie.get('canRun') === 'true') {
                console.warn('pjax:end | Executed: ' + cookie.get('canRun'));
                all();
                cookie.set('canRun', false, {expires: 30});
                console.warn('pjax:end | Executed End: ' + cookie.get('canRun'));
            } else {
                console.warn('pjax:end | Skipped: ' + cookie.get('canRun'));
                cookie.set('canRun', false, {expires: 30});
                console.warn('pjax:end | Skipped End: ' + cookie.get('canRun'));
            }


        });
        $(".modal").on("hidden.bs.modal", function(){
            console.log("this is event-hidden.bs.modal");
        });
        $(".modal").on("hide.bs.modal", function(){
            console.log("this is event-hide.bs.modal");

        });
        $(".modal").on("shown.bs.modal", function(){
            console.log("this is event-shown.bs.modal");

        });
        $(".modal").on("show.bs.modal", function(){
            console.log("this is event-show.bs.modal");

        });
        $('#w32')
            .on('click', function() { console.log("ZButtonWidget | $eventClick") })
            .on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
            .on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
            .on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
            .on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


        jQuery&&jQuery.pjax&&(jQuery.pjax.defaults.maxCacheLength=0);
        setTimeout(function () {$.notify({"message":"7","icon":null,"title":"Создание Core input","url":"","target":"_blank"}, notify_edb1516d);}, 500);
        jQuery('#w38').alert();
    });</script>
</body>
</html>
