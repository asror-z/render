<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZTabItemWidget;

$item = new ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->price_old = [17];
$item->currency = "$";
$item->title = 'asjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
$item->images= ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];


$item->name = "samsungasd aq7";
$item->price = [123, 12312, 777];
$item->price_old = [172];
$item->currency = "$";
$item->title = 'assdasjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
$item->images= ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];


echo \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'name' => 'name',
    'model' => $item,
    'config' => [
        'type' => \zetsoft\widgets\market\ZMarketCardsWidget::type['counterCard'],

    ],


]);
