<?php

use zetsoft\models\App\eyuf\Card;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\AUWs\ZSingleProductWidget;

$cards = Az::$app->menu->orders->card();
$model = new Card();

echo ZSingleProductWidget::widget([
    'config' => [
        'cards' => $cards,
    ]
]);
