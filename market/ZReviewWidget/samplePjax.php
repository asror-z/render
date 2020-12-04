<?php

use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\widgets\market\ZReviewWidget;

$model = Az::$app->market->review->getReviewByProductId(19);
$pjax = new ZPjax();
$pjax->id = 'begiin';
$this->pjaxBegin($pjax);
echo ZReviewWidget::widget([
'config' => [
    'data' => $model
]
]);
$this->pjaxEnd();
