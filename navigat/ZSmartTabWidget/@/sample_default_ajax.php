<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZSmartTabWidgetA;


$items = [];
$item = new TabItem();
$item->title = 'Tab 1';
//$item->content = 'Content 1';
$item->icTarget = 'jquery-smarttab';
$items[] = $item;
$item = new TabItem();
$item->title = 'Tab 2';
$item->url = 'http://mail.ru';
//$item->content = 'Content 2';
$item->icTarget = 'jquery-smartcart';
$items[] = $item;
$item = new TabItem();
$item->url = 'http://mail.ru';
$item->title = 'Tab 3';
//$item->content = 'Content 3';
$item->icTarget = 'smartwizard';
$items[] = $item;

echo ZSmartTabWidgetA::widget([
    'config' => [
        'theme' => ZSmartTabWidget:: theme['Default'],
        'animation' => ZSmartTabWidget:: animation['slide-swing'],
        'orientation' => ZSmartTabWidget:: orientation['horizontal'],
        'justified' => ZSmartTabWidget::justified['true'],
        'isAjax' => ZSmartTabWidget::isAjax['true'],
    ],
    'data' => $items,

]);    


