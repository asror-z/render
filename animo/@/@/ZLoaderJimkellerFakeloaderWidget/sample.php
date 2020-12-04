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


use zetsoft\widgets\animo\ZAFakeloaderWidget;

echo ZAFakeloaderWidget::widget([
    'config' => [
        'spinner'=>ZAFakeloaderWidget::spinner['spinner7'],
        'bgColor'=>'#a6e3f9',
        'timeToHide'=>1000
    ]
]);
