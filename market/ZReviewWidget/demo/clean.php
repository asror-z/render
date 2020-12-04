<?php

use zetsoft\system\Az;
use zetsoft\widgets\market\ZReviewWidget;

$rr = Az::$app->market->review->getReviewByProductId(8);

vdd($rr);
echo ZReviewWidget::widget();
