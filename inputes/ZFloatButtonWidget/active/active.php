<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\ButtonItem;
use zetsoft\widgets\inputes\ZFloatButtonWidget;

//Item1
$buttonItems = [];
$buttonItem = new ButtonItem();
$buttonItem->src = '/render/former/ZDynaWidget/assets/img/items.svg';
$buttonItem->childAclass = 'twitter';
$buttonItem->url = '#';

$buttonItems [] = $buttonItem;

//Item2
$buttonItem = new ButtonItem();
$buttonItem->childAclass = 'facebook';
$buttonItem->src = '/render/former/ZDynaWidget/assets/img/edit.svg';
$buttonItem->url = '#';

$buttonItems [] = $buttonItem;

//Item3
$buttonItem = new ButtonItem();
$buttonItem->childAclass = 'instagram';
$buttonItem->src = '/render/former/ZDynaWidget/assets/img/view.svg';
$buttonItem->url = '#';

$buttonItems [] = $buttonItem;

echo ZFloatButtonWidget::widget([
    'data' => $buttonItems,
]);
