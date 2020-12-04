<?php


use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;
// use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 4
    ]
]);



echo ZButtonWidget::widget([
    'config' => [
        'target' => ZButtonWidget::target['_blank'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'text' => 'blank',
        'btnRounded' => false,
        'url' => 'https://www.php.net/manual/en/function.str-replace.php',
    ],
]);

