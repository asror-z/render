<?php

/**
 *
 *
 * Author: Zoirjon Sobirov
 * username: Ammo
 *
 */


use zetsoft\system\Az;
use zetsoft\widgets\market\ZMProductBlockWidget;
use zetsoft\widgets\market\ZMyCardWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;

Az::$app->controller->layout = 'bozorMain';
?>
<div class="container">
    <b>Ваша корзина</b>

    <div class="row">
        <dic class="col-8">
            <br> <span style="color: green">Kорзина №1</span>
            <? echo \zetsoft\widgets\market\ZMProductBlockWidget::widget([]);?>
        </dic>

        <dic class="col-4">
            <? echo \zetsoft\widgets\market\ZMyCardWidget::widget([]);?>
        </dic>
    </div>
    <div class="row">
        <div class="col-5">
            <br><span>Kомментарий к заказу</span>
            <? echo \zetsoft\widgets\inputes\ZTextAreaWidget::widget([]);?>
        </div>
    </div>
</div>
