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
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\navigat\ZButtonWidget_new3;
use zetsoft\widgets\navigat\ZDownloadWidget;


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'Вход в систему',
        'hasIcon'=> false,
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'class' => 'text-white',
        'btnRounded' => false,

        'hasConfirm' => true,
        'confirm' => Az::l('уверены?'),
        'confirmTitle' => 'test',
        'canselLabelText' => 'cancel',
        'confirmLabelText' => 'ok',
        'blank' => false,

    ],

]);

echo ZButtonWidget::widget([
    'config' => [
        'url' => '',
        'btnType' => ZButtonWidget::btnType['button'],
        'text' => 'Вход в систему',
        'hasIcon'=> false,
        'btnStyle' => ZButtonWidget::btnStyle['btn-primary'],
        'class' => 'text-white',
        'btnRounded' => false,

    ],

]);



?>
<div class="mx-2">

    <?php
    echo ZButtonWidget::widget([
        'config' => [
            'icon' => 'fas fa-' . FA::_EDIT,
            'btnStyle' => ZButtonWidget::btnStyle['btn-transparent'],
            'class' => 'text-white',
            'btnFloating' => true,
            'iconColor' => '#4285f4',

        ],

    ]);



    echo ZButtonWidget::widget([
        'config' => [
            'btn' => false,
            'hasIcon' => false,
            'text' => 'my link',
            'url' => 'http://eyuf.zettest.uz/admin/core-action.aspx?search=chat#menu',
            
        ]
    ]);


    ?>


  



