<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\former\shop\OfferForm;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDatatableAjaxWidget;
use zetsoft\widgets\former\ZDatatableWidget;
use zetsoft\widgets\former\ZDatatableWidgetJ;
use zetsoft\widgets\former\ZDatatableWidgetM;
use zetsoft\widgets\former\ZDatatableWidgetX;

$data = [];

$item = new ProductItemForm();
$item->id = 1;
$item->name = 'dfsdqwe';
$item->status = 'my status';


$item1 = new ProductItemForm();
$item1->id = 12;
$item1->name = 'dfssdfsdfd';
$item1->status = 'my status';


$item2 = new ProductItemForm();
$item2->id = 13;
$item2->name = 'dfstrybd';
$item2->status = 'my status';

$data[] = $item;
$data[] = $item1;
$data[] = $item2;



echo ZDatatableWidgetJ::widget([
    'data' => $data
]);
