<?php

/*$item = new \zetsoft\dbitem\shop\ProductItem();
$item->name = "samsung aq7";
$item->price = [123, 123, 777];
$item->price_old = [];
$item->currency = "$";
$item->title = 'asjdjasdjhasjhdjkasjkdh';
$item->images= ['/render/market/XeMart - Ecommerce Template/html/images/tab-1.png'];

$card1 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'model' => $item
]);
$card2 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'model' => $item
]);
$card3 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'model' => $item
]);
$card4 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'model' => $item
]);
$card5 = \zetsoft\widgets\market\ZMarketCardsWidget::widget([
    'model' => $item
]);

$items = [
    $card1,
    $card2,
    $card3,
    $card4,
    $card5,


];*/

$items = [
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',
    '<img src="https://www.ixbt.com/img/n1/news/2019/7/5/Xiaomi-Mi-6-Russia-0_large.jpg">',


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


