<?php

use zetsoft\system\Az;
use zetsoft\widgets\market\ZCategoryWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/09-register.html
 * */
Az::$app->controller->layout = 'bozorMain';
?>
<div class="container">
    <div class="row">
        <div class="col-md-2 border">
            <?
                echo ZCategoryWidget::widget()
            ?>
        </div>
        <div class="col-md-10 border">
            <?
                echo ZHotOfferWidget::widget()
            ?>
        </div>
    </div>

</div>
