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


use zetsoft\widgets\navigat\ZButtonWidget_new3;

echo ZButtonWidget_new3::widget([
    'config' => [
        'btnType' => ZButtonWidget_new3::btnType['link'],
        'target' => ZButtonWidget_new3::target['_self'],
        'btn' => false,
        'url' => 'http://eyuf.zettest.uz/core/tester/asror/main.aspx?path=render%5Cnaviga%5CZButtonWidget_new3%5Csample#menu',
        'hasConfirm' => true,
        'blank' => false

    ],
    'event' => [
        'click' => 'function (event){e.preventDefault()}'
    ]

]);
