<?php

use zetsoft\system\Az;
use zetsoft\widgets\market\ZReviewWidget;

$model = Az::$app->market->review->getReviewByProductId(19);

echo ZReviewWidget::widget([
'config' => [
    'data' => $model
]
]);
