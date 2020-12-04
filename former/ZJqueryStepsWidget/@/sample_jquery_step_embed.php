<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

//use zetsoft\widgets\former\ZListViewWidgetOld;


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\former\ZJqueryStepsWidgetA;

$items = [];
$item = new TabItem();
$item->label = 'step';
$item->content = 'content 1';
$item->param = 'data-mode="iframe" data-url="http://www.jquery-steps.com/Examples#embed"';
$items[] = $item;
$item = new TabItem();
$item->label = 'step';
$item->content = 'content 2';
$items[] = $item;
$item = new TabItem();
$item->label = 'step';
$item->content = 'content 3';
$items[] = $item;
$item = new TabItem();
$item->label = 'step';
$item->content = 'content 4';
$items[] = $item;
echo ZJqueryStepsWidgetA::widget([
    'config' => [
        'transitionEffect' => ZJqueryStepsWidgetA::transitionEffect['fade'],
    ],
    'data' => $items,

]);
