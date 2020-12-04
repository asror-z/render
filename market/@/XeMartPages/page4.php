<?php

/**
 *
 *
 * Author:  Jasur Shukurov
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\market\ZCategoryWidget;



Az::$app->controller->layout = 'newlayout';


?>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?
            echo ZCategoryWidget::widget();
            echo ZCategoryWidget::widget();
          
            ?>
        </div>
        <div class="col-md-9">

            <?

            ?>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-3">
            <?

            ?>
        </div>
        <div class="col-md-9">

            <?

            ?>
        </div>
    </div>

</div>
