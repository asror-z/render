<?php

use zetsoft\models\App\eyuf\Card;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZSingleProductWidget;

$cards = Az::$app->menu->orders->product();

echo ZSingleProductWidget::widget([
    'config' => [
        'cards' => $cards,
    ]
]);
