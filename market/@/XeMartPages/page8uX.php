<?php

use zetsoft\system\Az;

Az::$app->controller->layout = 'bozorMain';
 ?>
<!-- Menu Area -->

        <div class="row">
            <div class="col-md-12">
                <?php
                   // echo \zetsoft\widgets\market\ZMenuWidget::widget();
                ?>
            </div>




        <div class="row">
            <div class="col-md-12">
                <?php
                    echo \zetsoft\widgets\market\ZHotOfferWidget::widget();
                ?>
            </div>


<!-- End Mobile Menu -->

