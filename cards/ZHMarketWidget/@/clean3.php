<?php


use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\market\ZSVGWidget;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <style>
        .summary {
            font-family: 'Righteous', cursive;
        }


        .horizontal-card {
           
            margin-top: 10px;
            position: relative;
            height: 75%;
            /*border: 2px solid limegreen;*/
            border-radius: 5px;
            box-shadow: -1px 0px 15px -2px rgba(173, 170, 170, 0.55);
          
        }


        
        /*
        ##Device = Desktops
        ##Screen = 1281px to higher resolution desktops

        @media (min-width: 1281px) {

        //CSS

        }

        /*
          ##Device = Laptops, Desktops
          ##Screen = B/w 1025px to 1280px
        */

        @media (min-width: 1025px) and (max-width: 1280px) {

        //CSS

        }

        /*
          ##Device = Tablets, Ipads (portrait)
          ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) {

            .resp-text{
                font-size: 20px;
            }

        }

        /*
          ##Device = Tablets, Ipads (landscape)
          ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        //CSS

        }

        /*
          ##Device = Low Resolution Tablets, Mobiles (Landscape)
          ##Screen = B/w 481px to 767px
        */

        @media (min-width: 481px) and (max-width: 767px) {

            .resp-text{
                font-size: 20px;
            }

        }

        /*
          ##Device = Most of the Smartphones Mobiles (Portrait)
          ##Screen = B/w 320px to 479px
        */

        @media (min-width: 320px) and (max-width: 480px) {

            .resp-text{
                font-size: 15px;
            }
            .resp-photo{
                width: 150px;
                height: 150px;
            }
            .resp-icon{
                width: 30px;
                height: 30px;
            }
            .resp-btn{
                max-width: 30px;
                height: 20px;
            }
        }


    </style>
</head>
<body>





<div class="d-flex p-4">
<div class="container">
    <div class="row">

        <div class="col-md-4 p-1">
            <img width="auto" height="250px" src="https://www.isa-aydin.com/wp-content/uploads/2020/04/product-on-white-sample-4.jpg?x96595" class="image-horizontal-item " alt="">
        </div>


        <div class="col-md-8 horizontal-main">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h2 class="mt-3 ml-3 texts">Арахисовая паста с мёдом</h2>
                    <h2 class="mt-3 ml-5 texts">200г</h2>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex w-50 mt-3 ml-1">
                    <p class="text-success fz-16">В наличии</p>
                    <p class="ml-4 text-black-50">art:1434234</p>
                </div>
                
            </div>
        </div>


            <div class="row mt-2">
                <div class="d-flex col-md-12">

                    <div class="col-md-6 d-flex p-0">

                       <!-- <img width="20%" height="60%" src="/render/market/ZGlotrCardWidget/medal_new.svg"/>-->
                            <?
                            echo ZSVGWidget::widget([
                                'config' => [
                                'type' => 'top_sell'
                                ]
                            ]);
                            ?>

                        <div class="pb-5">

                            <?
                            echo ZKStarRatingWidget::widget([
                                'name' => 'gggfg',
                                'config' => [
                                    'show' => false
                                ]
                            ]);
                            ?>
                            <p class="ml-4">(2 отзыва)</p>
                        </div>




                    </div>

                    <div class="col-md-5 ml-auto ">
                        <h2 class="text-success text-center summary ">162.000</h2>
                        <h4 class="text-center text-black-50 fz-22">сум за 1шт</h4>
                    </div>

                </div>

            </div>

            <div class="row col-md-12 horizontal-card-bottom position-absolute left-0 mb-3">
                <div class="d-flex align-items-center col-md-6">
                    <i class="far fa-heart grey-text fa-2x pr-2 ml-2"></i>
                    <p class="ml-2 fz-18">Избранное</p>
                    <i class="fa fa-chart-bar grey-text fa-2x pr-2 ml-5"></i>
                    <p class="ml-2">Сравнить</p>
                </div>
                <div class="col-md-5 w-100 ml-auto mb-2">
                    <button class="w-100 border border-0 bg-success p-2 rounded text-white fz-20 addtocard" id="addcard"><i class=""></i>Добавить в корзину</button>
                    <div class="inputhide">

                        <div class="d-flex">
                            <?php
                            echo ZKTouchSpinWidget::widget([
                                'name'=> 'name',
                                'config'=>[
                                    'id'=>5,
                                    'hintText' => '',
                                    'buttonup_txt' => '<i class="fa fa-plus"></i>',
                                    'buttondown_txt' => '<i class="fa fa-minus"></i>',
                                    'buttonup_class' => 'btn btn-success p-3',
                                    'buttondown_class' => 'btn btn-success p-3',
                                    'class' => 'text-center small',
                                ]
                            ]);
                            ?>
                            <button class="clearcard small btn">
                                <i class="fa fa-window-close" ></i>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>

    </div>

</div>
</div>

                

 <script>
     $(".inputhide").hide();
     if ($('#addcard').is(':visible')) {
         $('.addtocard').click(function () {
             $('#addcard').hide();
             $('.inputhide').addClass('d-flex');
             $('.inputsh').show();
             $('#w2').val('1');


         });
     }
     $('.clearcard').click(function () {
         $('#addcard').show();
         $('.inputhide').removeClass('d-flex');
         $('.inputhide').hide();
         $('#w2').val('1')

     });
 </script>
</body>
</html>

