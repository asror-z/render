<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\market\ZMarketCardsWidget;
use zetsoft\widgets\market\ZIconCardWidget22;

$item = new ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->price_old = [324,364,388];
$item->currency = "$";
$item->title = 'asjdjasdjhasjhdjkasjkdhaskldjklajsdjaskjd';
$item->images= ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];


echo \zetsoft\widgets\market\ZIconCardWidget22::widget([


   
]);



