<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *   Edited: Anvar Jabborov
 */

use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZTabWidget;

$tabs = [];

$item = new TabItem();
$item->label = 'Наименование и фото товара';
$item->content = 'lklklkll';
$item->pushUrl = true;
$tabs[] = $item;
$item = new TabItem();
$item->label = 'Цена';
$item->content = '21321';
$tabs[] = $item;
$item = new TabItem();
$item->label = 'Количество';
$item->content = ZCardWidget::widget([
    'config' => [
        'title' => 'New Tab lear',
        'type' => ZCardWidget::type['venCard']
    ],
]);
$tabs[] = $item;
$item = new TabItem();
$item->label = 'Тип доставки';
$item->content = 'Something';
$tabs[] = $item;

echo ZTabWidget::widget([
    'data' =>
        $tabs,
    
    'config' => [
        'type' => ZTabWidget::type['classic'],
        'mdTabColor' => ZTabWidget::mdTabColor['white'],
        'classicTabColor' => ZTabWidget::classicTabColor['tabs-orange'],
        'mdPills' => true,
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
