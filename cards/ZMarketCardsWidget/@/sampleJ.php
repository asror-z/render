<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\market\ZMarketCardsWidgetJ;
use zetsoft\widgets\market\ZTabItemWidget;

$item = new ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->price_old = [17];
$item->currency = "$";
$item->title = 'asjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
$item->images= ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];


echo \zetsoft\widgets\market\ZMarketCardsWidgetJ::widget([
    'config' => [
        'type' => ZMarketCardsWidgetJ::type['featureVertical'],
    ],
    'model' => $item
]);


