<?php

/**
 *
 *
 * Author:  Shahzod G'ulomqodirov
 *
 */
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\themes\ZFontYandexWidget;

Az::$app->controller->layout = 'main';

echo ZFontYandexWidget::widget();

 ?>

<style>
    body{
        font-family: Righteous;
    }
    .iconhover:hover{
        color: green!important;
    }
    .cardborder{
        border: green 2px solid!important;
        border-radius: 2%!important;
    }
</style>

<div class="col-3">

    <!-- Card Regular -->
    <div class="card card-cascade rounded border border-success cardborder">

        <!-- Card image -->

        <div class="m-1">
            <img class="card-img-top" src="https://www.ortery.com/wp-content/uploads/bb-plugin/cache/ortery-pure-white-beats-landscape.jpg" alt="Card image cap">
            <span style="right: 15px" class="counter position-absolute fz-26 mt-5">-22%</span>
            <img class="position-absolute mt-3" style="left:6%; transform: scale(1.1) rotate(-45deg);" width="45px" height="45px" src="/render/market/ZGlotrCardWidget/medal_new.svg" alt="">

               
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center p-4">

            <!-- Title -->
            <h4 class=" d-flex">
                <div class="col-7 text-left p-0" style="max-width: 100%">
                    <strong class="fz-20">Ноутбук HP Pavilion 4gb 1tb Amd A10</strong>
                </div>
                <div class="col-5 text-right p-0">
                    <a class="text-muted iconhover fz-30 pr-3"><i class="fa fa-heart" style="font-size: 36px"></i></a>
                    <a class="text-muted iconhover fz-30"><i class="fa fa-chart-bar" style="font-size: 36px"></i></a>
                </div>
            </h4>

            <!-- Subtitle -->
            <div class="d-flex justify-content-between">
                <span class="text-left text-left text-success py-2 fz-20">В наличии</span>
                <span class="font-weight-bold text-left text-black-50 py-2 fz-14">Арт. 359624</span>
            </div>
            <!-- Subtitle -->
            <div class="d-flex justify-content-between">
                <div class="">
                    <h6 class="font-weight-bold text-left indigo-text py-2 fz-26 text-danger">20,000 UZS</h6>
                    <!-- Text -->
                    <p class="card-text fz-14 text-left"><strike>18,900 UZS</strike>
                        <a href="#" class="deep-orange-text"></b></a>
                    </p>
                </div>

                <div class="d-blok text-right">
                    <div class=" mr-0">
                        <?php
                        echo ZKStarRatingWidget::widget([
                            'name' =>'name',
                            'config' => [
                                'show' => false
                            ]
                        ]);
                        ?>
                    </div>
                    <span class="small fz-14">(2 отзыва)</span>
                </div>

            </div>
        </div>

        <!-- Card footer -->
        <div class="pl-4 pr-4 pb-4 text-muted text-center p-0">

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
                                'buttonup_class' => 'btn btn-success btn-lg',
                                'buttondown_class' => 'btn btn-success btn-lg',
                                'class' => 'text-center btn-lg',
                            ]
                        ]);
                        ?>
                        <button class="clearcard btn">
                            <i class="fa fa-window-close p-2" ></i>
                        </button>
                    </div>


            </div>
           
        </div>

    </div>
    <!-- Card Regular -->

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
