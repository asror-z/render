<?php


use zetsoft\dbitem\wdg\MenuItem;
use zetsoft\widgets\navigat\ZBreadCrumbWidget;


$data = [];

$item = new MenuItem();
$item->icon = 'fa fa-save';
$item->url = 'fsa';
$data[] = $item;

$item = new MenuItem();
$item->icon = 'fa fa-save';
$item->url = 'fsa';
$data[] = $item;

$item = new MenuItem();
$item->icon = 'fa fa-save';
$item->url = 'hdfhdf';
$data[] = $item;


echo ZBreadCrumbWidget::widget([
    'data' => $data
]);
