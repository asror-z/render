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
        'cssClass' => ZJqueryStepsWidgetA::cssClass['tabcontrol'],
        'enableAllSteps' => ZJqueryStepsWidgetA::enableAllSteps['true'],
        'enablePagination' => ZJqueryStepsWidgetA::enablePagination['false'],
    ],
    'data' => $items,

]);
