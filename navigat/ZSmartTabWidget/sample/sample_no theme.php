<?php


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZSmartTabWidget;


$items = [];
for ($i = 1; $i <= 6; $i++) {
    $item = new TabItem();
    $item->title = 'Tab ' . $i;
    $item->content = 'Content ' . $i;
   // $item->class = 'p-1';
    $items[] = $item;
}

echo ZSmartTabWidget::widget([
    'config' => [
        'theme' => ZSmartTabWidget:: theme['No Theme'],
        'animation' => ZSmartTabWidget:: animation['slide-swing'],
        'orientation' => ZSmartTabWidget:: orientation['horizontal'],
        'justified' => ZSmartTabWidget::justified['true'],
        'isAjax' => ZSmartTabWidget::isAjax['false'],
    ],
    'data' => $items,

]);    


