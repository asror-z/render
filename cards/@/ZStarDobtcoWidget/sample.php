<?php
/**
 *
 *
 * Author:  Umid Abdurakhmonov
 * Refactored by: Umid Abdurakhmonov
 */


use FontLib\Table\Type\name;
use zetsoft\system\Az;
use zetsoft\widgets\market\ZStarDobtcoWidget;
$items = Az::$app->forms->modelz->data();
echo ZStarDobtcoWidget::widget([
    'data' => $items,
    'config' => [
        'quantity' => 5,
        'placeholder' => '',
        'icon' => 'fas fa-star',
        'class' => '',
    ]
]);
