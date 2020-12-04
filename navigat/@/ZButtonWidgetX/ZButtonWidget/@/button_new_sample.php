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
use zetsoft\system\assets\ZColor;
use zetsoft\widgets\navigat\ZButtonT_OLDWidget;
use zetsoft\widgets\navigat\ZButtonWidget_new;

echo ZButtonWidget_new::widget([
    'config' => [
        'layout' => ZButtonWidget_new::layout['iconButton'],
        'name' => 'buttton',
        'ttText' => 'default',
        'ttSide' => ZButtonWidget_new::ttSide['right'],
        'color' => ZColor::color['warning-color'],
        'btnStyle' => ZButtonWidget_new::btnStyle['btn-outline-danger'],




    ]
]);



