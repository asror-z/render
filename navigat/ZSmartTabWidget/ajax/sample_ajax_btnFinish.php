<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZSmartTabWidgetA;
use zetsoft\widgets\navigat\ZSmartWizardWidget;


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

echo ZSmartWizardWidget::widget([
    'config' => [
        'toolbarExtraButtons' => ZSmartWizardWidget::toolbarExtraButtons['btnFinish'],

    ],
    'data' => $items,

]);    


