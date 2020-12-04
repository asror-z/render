<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZSmartTabWidgetA;
use zetsoft\widgets\navigat\ZSmartTabAjaxWidget;


$items = [];

$item = new TabItem();
$item->title = 'Tab 1';
$item->url = 'https://api.npms.io/v2/package/jquery-smarttab';
$items[] = $item;

$item = new TabItem();
$item->title = 'Tab 2';
$item->url = 'https://api.npms.io/v2/package/smartwizard';
$items[] = $item;

$item = new TabItem();
$item->url = 'https://api.npms.io/v2/package/jquery-smartcart';
$item->title = 'Tab 3';
$items[] = $item;

echo ZSmartTabAjaxWidget::widget([
    'config' => [
        
    ],
    'data' => $items,

]);    

