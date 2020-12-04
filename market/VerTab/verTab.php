<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .vertical-tab-container{
        z-index: 10;
        background-color: #ffffff;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        border:1px solid #ddd;
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
    }
    .vertical-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    .vertical-tab-menu div.list-group{
        margin-bottom: 0;
    }
    .vertical-tab-menu div.list-group>a{
        margin-bottom: 0;
    }
    .vertical-tab-menu div.list-group>a .glyphicon,
    .vertical-tab-menu div.list-group>a .fa {/* font-awesome only */
        color: #00c851;
    }
    .vertical-tab-menu div.list-group>a:first-child{
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
    }
    .vertical-tab-menu div.list-group>a:last-child{
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
    }
    .vertical-tab-menu div.list-group>a.active,
    .vertical-tab-menu div.list-group>a.active .glyphicon,
    .vertical-tab-menu div.list-group>a.active .fa{
        background-color: #00c851;
        background-image: #00c851;
        color: #ffffff;
    }
    .vertical-tab-menu div.list-group>a.active:after{
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-left: 10px solid #00c851;
    }
    .vertical-tab-content{
        background-color: #ffffff;
    }
    .vertical-tab div.vertical-tab-content:not(.active){
        display: none;
    }
</style>

<div class="container-fluid ">
    <div class="row">

        <div class="col-md-12  vertical-tab-container">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 vertical-tab-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item active text-center">
                        <p>Описание</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Характеристика</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Информация</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Цены</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Отзывы</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Вопросы и ответы</p>
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <p>Карта</p>
                    </a>
                </div><!-- /.list-group -->
            </div><!-- /.vertical-tab-menu -->

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 vertical-tab">

                <div class="vertical-tab-content active text-center">
                    <p>Hello1</p>
                </div>

                <div class="vertical-tab-content text-center">
                    <p>Hello2</p>
                </div>

                <div class="vertical-tab-content text-center">
                    <p>Hello3</p>
                </div>

                <div class="vertical-tab-content text-center">
                    <p>Hello4</p>
                </div>

                <div class="vertical-tab-content text-center">
                    <p>Hello5</p>
                </div>
                <div class="vertical-tab-content text-center">
                    <p>Hello6</p>
                </div>
                <div class="vertical-tab-content text-center">
                    <p>Hello7</p>
                </div>

            </div><!-- /.vertical-tab -->

        </div><!-- /.vertical-tab-container -->

    </div></div><!-- /.container&row -->

<script>
    $(document).ready(function() {
        $(".vertical-tab-menu>.list-group>a").click(function (event) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $(".vertical-tab>.vertical-tab-content").removeClass("active");
            $(".vertical-tab>.vertical-tab-content").eq(index).addClass("active");
        });
    });
</script>
