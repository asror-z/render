<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\navigat\ZButtonDbWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

echo ZButtonWidget::widget([
    'config' => [

    ]
]);
   
echo ZButtonWidget::widget([
    'config' => [
        'btnRounded' => false,
        'btnStyle' => ZButtonWidget::btnStyle['btn-info'],
        'btnSize' => ZButtonWidget::btnSize['btn-lg'],
        'text' => 'Добавить документы',
        'icon' => 'fas fa-'. FA::_PLUS,
        'url' => ZUrl::to(['admin/core-doocument/create']),
    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'btnRounded' => false,
        'btnStyle' => ZButtonWidget::btnStyle['btn-info'],
        'btnSize' => ZButtonWidget::btnSize['btn-lg'],
        'text' => 'Добавить информацию',
        'icon' => 'fas fa-'. FA::_PLUS,
        'url' => ZUrl::to(['admin/scholar/create']),

    ]
]);
