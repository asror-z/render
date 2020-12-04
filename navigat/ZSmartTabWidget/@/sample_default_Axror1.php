<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;
use zetsoft\widgets\navigat\ZSmartTabWidget_Axror1;


$items = [];
for ($i = 1; $i <= 7; $i++) {
    $item = new TabItem();
    $item->title = 'Tab ' . $i;
    $item->content = 'Content ' . $i;
    $items[] = $item;
}

echo ZSmartTabWidget_Axror1::widget([
    'config' => [
        'theme' => ZSmartTabWidget_Axror1:: theme['Default'],
        'animation' => ZSmartTabWidget_Axror1:: animation['slide-swing'],
        'orientation' => ZSmartTabWidget_Axror1:: orientation['horizontal'],
        'justified' => ZSmartTabWidget_Axror1::justified['true'],
        'isAjax' => ZSmartTabWidget_Axror1::isAjax['false'],
    ],
    'data' => $items,

]);    


