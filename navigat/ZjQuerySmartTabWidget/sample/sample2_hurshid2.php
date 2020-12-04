<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget;


$items = [];

$item = new TabItem();
$item->title = 'Tab 1' ;
$item->content = 'Content 1' ;
$items[] = $item;

$item = new TabItem();
$item->title = 'Tab 23424234';
$item->content = ZHImgWidget::widget([
    'config' => [
        'url' => 'https://i.ytimg.com/vi/EBqtrMUs-no/maxresdefault.jpg'
    ]
]);
$items[] = $item;

echo ZSmartTabWidget::widget([
    'config' => [
        'theme' => ZSmartTabWidget:: theme['Default'],
        'animation' => ZSmartTabWidget:: animation['slide-swing'],
        'orientation' => ZSmartTabWidget:: orientation['vertical'],
        'justified' => ZSmartTabWidget::justified['false'],
        'isAjax' => ZSmartTabWidget::isAjax['false'],
    ],
    'data' => $items,

]);    


