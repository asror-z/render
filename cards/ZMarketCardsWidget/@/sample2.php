<?php


use zetsoft\widgets\cards\ZMarketCardsWidget;
use zetsoft\widgets\cards\ZMarketCardsWidgetX;
use zetsoft\widgets\cards\ZTabItemWidget;

$item = new \zetsoft\dbitem\shop\ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->currency = "$";
echo ZMarketCardsWidget::widget([
    'config' => [
        'type' => ZMarketCardsWidgetX::type['vertical'],
        'item' => $item,
    ]
]);
