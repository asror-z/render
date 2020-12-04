<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;

Az::$app->controller->layout = 'main';
?>

<div class="col-md-3 c-pointer">

    <!-- Card Regular -->
    <div class="card card-cascade pb-0 border-success rounded ">

        <!-- Card image -->

        <div>
            <img class="card-img-top"
                 src="https://m.media-amazon.com/images/I/71zTykARclL._UY560_.jpg">
                 <span class="counter fz-26" style="position: absolute; right:30px; top: 20px " >-10%</span>
        </div>

        <!-- Card content -->
        <div class="card-body row">

            <!-- Title -->
            <div class="col-md-6 border-success">
                <div>
                    <a class="card-title text-secondary"><strong class="fz-26">Ноутбук HP </strong></a><br>
                    <a class="fz-6">Ultrabook-Notebook</a> <br>
                    <a class="card-title text-success fz-20">В наличии</a><br>
                    <a class="font-weight-bold text-danger fz-24">2 376 000 UZS</a> <br>
                    <strike>19000</strike>
                    <a href="#" class="deep-orange-text">Скидка: <b>4 000 UZS</b></a>
                </div>
            </div>

            <div class="col-md-6 text-right">
                <a class="text-secondary overlay"><i class="fa fa-heart" style="font-size: 36px"></i></a>
                <a class="text-secondary overlay"><i class="fa fa-chart-bar" style="font-size: 36px"></i></a>
                <div class=" w-100 d-flex mt-5 justify-content-end text-right">
                    <?php
                    echo ZKStarRatingWidget::widget([
                        'name' => 'name'
                    ]);
                    ?>
                </div>


            </div>
            <div class="justify-content-center text-center col-6 offset-2">
            <div>
            <?php
                echo ZKTouchSpinWidget::widget([
                    'name'=> 'name',
                    'config'=>[
                        'buttonup_txt' => '<i class="fa fa-plus"></i>',
                        'buttondown_txt' => '<i class="fa fa-minus"></i>',
                        'buttonup_class' => 'btn btn-success',
                        'buttondown_class' => 'btn btn-success',
                        'class' => 'text-center',
                    ]
                ]);
                ?>
            </div>

        </div>

            <div class="">
           <a class="text-success fz-26"> <i class="fa fa-shopping-cart"></i>  </a>
            </div>
    </div>

</div>
