<?php

use zetsoft\widgets\cards\ZProductTabsOnlyWidget;
use zetsoft\widgets\market\ZMButtonWidget;

$item = new \zetsoft\models\shop\ShopProduct();
            echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                'config' => [],
                'model' => $item
            ]);

$card1 = ZProductTabsOnlyWidget::widget([
    'model' => $item
]);
$card2 = ZProductTabsOnlyWidget::widget([
    'model' => $item
]);
$card3 = ZProductTabsOnlyWidget::widget([
    'model' => $item
]);
$card4 = ZProductTabsOnlyWidget::widget([
    'model' => $item
]);
$card5 = ZProductTabsOnlyWidget::widget([
    'model' => $item
]);

$items = [
    $card1,
    $card2,
    $card3,
    $card4,
    $card5,
    

];



echo \zetsoft\widgets\images\ZSlickWidget::widget([
       'config' => [
               'id' => 'slider',
               'dots' => true,
               'slidesToShow' => 1,
               'slidesToScroll' => 1,
               'autoplay' => true,
               'autoplaySpeed' => 1000,
                'items' => $items,


    ]
]);


