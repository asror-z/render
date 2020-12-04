<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\former\shop\OfferForm;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDatatableAjaxWidget;
use zetsoft\widgets\former\ZDatatableWidget;
use zetsoft\widgets\former\ZDatatableWidgetJ;
use zetsoft\widgets\former\ZDatatableWidgetM;
use zetsoft\widgets\former\ZDatatableWidgetNew;
use zetsoft\widgets\former\ZDatatableWidgetX;

$data = [];

$item = new ProductItemForm();
$item->id = 1;
$item->name = 'dfsdqwe';
$item->status = 'my status';


$item1 = new ProductItemForm();
$item1->id = 12;
$item1->name = 'dfssdfsdfd';



$item2 = new ProductItemForm();
$item2->id = 13;
$item2->name = 'dfstrybd';


$data[] = $item;
$data[] = $item1;
$data[] = $item2;




echo ZDatatableWidgetNew::widget([
    'model' => new ProductItemForm(),
    'data' => $data
]);
