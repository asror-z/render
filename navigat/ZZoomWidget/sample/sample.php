<?php

/**
 *
 *
 * Author:  Daho
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *  Edited: Anvar Jabborov
 */


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\navigat\ZPillWidget;
use zetsoft\widgets\themes\ZCardWidget;


$tabs = [];
$item = new TabItem();
$item->title = 'Первый';
$item->content = 'Content 1';
$tabs[] = $item;
$item = new TabItem();
$item->title = 'Второй';
$item->content = 'Content 2';
$tabs[] = $item;
$item = new TabItem();
$item->title = 'New tab';
$item->content = ZCardWidget::widget([
    'config' => [
        'title' => 'New Tab',
        'type' => ZCardWidget::type['venCard']
    ],
]);
$tabs[] = $item;
$item = new TabItem();
$item->title = 'last';
$item->content = 'Content 4';
$item->disabled = true;
$tabs[] = $item;


echo ZPillWidget::widget([
    'data' =>
        $tabs,

    'config' => [
        'type' => ZPillWidget::type['md'],
        'mdTabColor' => ZPillWidget::mdTabColor['pills-info'],
        'classicTabColor' => ZPillWidget::classicTabColor['pills-purple-gradient'],
        'tabPanelId' => 'tab-panel-id',
        'contentPanelId' => 'content-panel-id',
    ]
]);
