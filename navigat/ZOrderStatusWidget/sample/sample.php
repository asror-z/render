<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\TabItem;
use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZOrderStatusWidget;



$tabItems = [];
$tabItem = new TabItem();
$tabItem->title = Az::l('Принят');
$tabItem->step = 1;
$tabItem->active = false;
$tabItem->icon = 'fal fa-vote-yea fa-2x';
$tabItems[] = $tabItem;

$tabItem2 = new TabItem();
$tabItem2->label = Az::l('Формируется');
$tabItem2->step = 2;
$tabItem2->active = false;
$tabItem2->icon = 'fal fa-spinner fa-2x';
$tabItems[] = $tabItem2;

$tabItem3 = new TabItem();
$tabItem3->label = Az::l('Доставляется');
$tabItem3->step = 3;
$tabItem3->active = ;
$tabItem3->icon = 'fal fa-truck fa-2x';
$tabItems[] = $tabItem3;

$tabItem4 = new TabItem();
$tabItem4->label = Az::l('Доставлено');
$tabItem4->step = 4;
$tabItem4->active = true;
$tabItem4->icon = 'fal fa-truck-loading fa-2x';
$tabItems[] = $tabItem4;

$tabItem5 = new TabItem();
$tabItem5->label = Az::l('Получено');
$tabItem5->step = 5;
$tabItem5->active = false;
$tabItem5->icon = 'fal fa-check-double fa-2x';
$tabItems[] = $tabItem5;






echo ZOrderStatusWidget::widget([
    'data' => $tabItems
]);

