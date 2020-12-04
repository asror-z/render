<?php


use zetsoft\widgets\market\ZTabItemWidget;

$item = new \zetsoft\dbitem\shop\ProductItem();
$item->name = "samsuing aq7";
$item->price = [123, 123, 777];
$item->currency = "$";
echo ZTabItemWidget::widget([
    'config' => [
        'type' => ZTabItemWidget::type['horizontal'],
        'item' => $item
    ]
]);
