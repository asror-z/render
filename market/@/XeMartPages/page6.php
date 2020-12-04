<?php

/**
 *
 *
 * Author:  Mirshod Ibodov
 *
 */


use zetsoft\system\Az;
use zetsoft\widgets\market\ZAddProductWidget;
use zetsoft\widgets\market\ZMCardBtnWidget;


Az::$app->controller->layout = 'newlayout';


?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th class="t-pro">PRODUCT </th>
                    <th class="t-price"> PRICE </th>
                    <th class="t-total">STOCK </th>
                    <th class="t-rem">ADD TO CART</th>
                </tr>
                </thead>
            <tbody>
            <? echo ZAddProductWidget::widget([]);?>
            </tbody>







            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <?

            ?>

        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <?

            ?>
        </div>

    </div>


    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">

        </div>
    </div>


    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">

        </div>
    </div>



</div>
