<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabAjaxWidgetAZ;
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
$item->url = '/core/tester/ajaxify/sample_3.aspx';
$item->title = 'Tab 3';
$items[] = $item;

echo ZSmartTabAjaxWidgetAZ::widget([
    'config' => [
        
    ],
    'data' => $items,

]);    


