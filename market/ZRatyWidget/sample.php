<?php
/**
 *
 *
 * Author:  Umid Abdurakhmonov
 * Refactored by: Umid Abdurakhmonov
 */


use zetsoft\widgets\market\ZRatyWidget;

echo ZRatyWidget::widget([
    'options' => [
        'value' => 0,
        'config' => [
            'name' => 'name',
            'hasPlace' => true,
            'starType' => 'img',
            'half' => true,

        ]
    ]
]);
