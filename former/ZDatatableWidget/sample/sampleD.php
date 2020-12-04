<?php

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDatatableAjaxWidget;
use zetsoft\widgets\former\ZDatatableWidget;
use zetsoft\widgets\former\ZDatatableWidgetD;
use zetsoft\widgets\former\ZDatatableWidgetM;
use zetsoft\widgets\former\ZDatatableWidgetNew;
use zetsoft\widgets\former\ZDatatableWidgetX;

$tabItems = [];
$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/single-productAbdulloh2.aspx?id=' ;
$tabItem->label = Az::l('Описание');
$tabItem->active = 1;
$tabItems[] = $tabItem;

$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/characteristics.aspx?id=' ;
$tabItem->label = Az::l('Характеристика');
$tabItem->active = 1;
$tabItems[] = $tabItem;

$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/single-productPrice.aspx?id=' ;
$tabItem->label = Az::l('Цены');
$tabItem->active = 1;
$tabItems[] = $tabItem;

$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/review.aspx?id=' ;
$tabItem->label = Az::l('Отзывы');
$tabItem->active = 1;
$tabItems[] = $tabItem;

$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/questionsAnswers.aspx?id=' ;
$tabItem->label = Az::l('Вопросы и ответы');
$tabItem->active = 1;
$tabItems[] = $tabItem;

$tabItem = new TabItem();
$tabItem->url = '/shop/user/product/map.aspx?id=' ;
$tabItem->label = Az::l('Карта');
$tabItem->active = 1;
$tabItems[] = $tabItem;

echo ZDatatableWidgetNew::widget([
    'data' => $tabItems
]);
