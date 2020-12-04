<?php

use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

ZRowWidget::begin();

ZColWidget::begin([
    'config' => [
        'width' => 4,
    ]
]);

echo ZCardWidget::widget([]);
echo ZCardWidget::widget([]);

ZColWidget::end();

ZColWidget::begin([
    'config' => [
        'width' => 6
    ]
]);

echo ZCardWidget::widget([]);

ZColWidget::end();

ZColWidget::begin();

echo ZCardWidget::widget([]);

ZColWidget::end();

ZColWidget::begin();

echo ZCardWidget::widget([]);
ZColWidget::end();

ZRowWidget::end();

