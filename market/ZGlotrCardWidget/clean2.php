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
</style>

<div class="col-4">

    <!-- Card Regular -->
    <div class="card card-cascade rounded-lg border-2 border-success">

        <!-- Card image -->

        <div class="m-1">
            <img class="card-img-top" src="https://www.ortery.com/wp-content/uploads/bb-plugin/cache/ortery-pure-white-beats-landscape.jpg" alt="Card image cap">
            <span style="right: 15px" class="counter position-absolute fz-26 mt-5">-22%</span>
            <a>

               
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center p-4">

            <!-- Title -->
            <h4 class=" d-flex">
                <div class="col-7 text-left p-0">
                    <strong class="fz-18">Ноутбук HP Pavilion 4gb 1tb Amd A10</strong>
                </div>
                <div class="col-5 text-right p-0">
                    <a class="text-success fz-30 "><i class="fa fa-heart" style="font-size: 36px"></i></a>
                    <a class="text-success fz-30"><i class="fa fa-chart-bar" style="font-size: 36px"></i></a>
                </div>
            </h4>

            <!-- Subtitle -->
            <h6 class="font-weight-bold text-left indigo-text py-3">V nalichie</h6>
            <!-- Subtitle -->
            <div class="d-flex justify-content-between">
                <div class="">
                    <h6 class="font-weight-bold text-left indigo-text py-2 fz-20 text-danger">2 376 000 сум / шт.</h6>
                    <!-- Text -->
                    <p class="card-text text-left"><strike>19000</strike>
                        <a href="#" class="deep-orange-text">Скидка: <b>4 000 сум</b></a>
                    </p>
                </div>

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

            </div>
        </div>

        <!-- Card footer -->
        <div class=" p-2 text-muted text-center p-0">

            <button class="w-100 border border-0 p-2 bg-success p-2 rounded text-white fz-26 addtocard" id="addcard"><i class=""></i>Добавить в корзину</button>
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
                                'class' => 'text-center btn-lg touchCount',
                            ],
                            'event' => [
                                'startupspin' => '
                                    function() {
                                        var amount = $(".touchCount").val();
                                       $.ajax({
                                          url: \'/core/product/setToCart.aspx\',
                                          method: \'GET\',
                                          data: {
                                              catalog_id: 2,
                                              amount: amount,
                                          },
                                          success: function (data) {
                                              $(\'.wishCount\').html(data);
                                          },
                                          error: function (error) {
                                             console.log(error);
                                          }
                                      }) 
                                    }',
                                    'startdownspin'=> '
                                        function() {
                                            var amountMinus = $(".touchCount").val();
                                            $.ajax({
                                          url: \'/core/product/setToCart.aspx\',
                                          method: \'GET\',
                                          data: {
                                              catalog_id: 2,
                                              amount: amountMinus --,
                                          },
                                          success: function (data) {
                                              $(\'.wishCount\').html(data);
                                          },
                                          error: function (error) {
                                             console.log(error);
                                          }
                                      })  
                                        
                                        }
                                    '
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

              $.ajax({
                  url: '/core/product/setToCart.aspx',
                  method: 'GET',
                  data: {
                      catalog_id: 2,
                      amount: 1,
                  },
                  success: function (data) {
                      $('.wishCount').html(data);
                  },
                  error: function (error) {
                     console.log(error);
                  }
              })

          });
      }
      $('.clearcard').click(function () {
          $('#addcard').show();
          $('.inputhide').removeClass('d-flex');
          $('.inputhide').hide();
          $('#w2').val('1')
         
      });

</script>
