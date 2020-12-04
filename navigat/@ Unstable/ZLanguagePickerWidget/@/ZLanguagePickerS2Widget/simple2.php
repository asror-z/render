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

use zetsoft\system\Az;
use zetsoft\widgets\themes\ZLanguagePickerWidget;

echo ZLanguagePickerWidget::widget([
    'config' =>[
        'host'=>'',
        'control'=>'',
        'urlImage'=>'',
    ]
]);

echo Az::l('идти');
