<?php
/**
 *
 *
 * Author:  Umid Abdurakhmonov
 * Refactored by: Umid Abdurakhmonov
 */


use FontLib\Table\Type\name;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZStarDobtcoWidget;

echo ZStarDobtcoWidget::widget([
    
    'config' => [
        'quantity' => 5,
        'rating' => '3',
        'placeholder' => '',
        'icon' => 'fas fa-star',
        'class' => '',
    ]
]);
