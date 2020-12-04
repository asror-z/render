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


use zetsoft\widgets\inputes\ZFileInputWidget_JK;

echo ZFileInputWidget_JK::widget([
    'config' => [
        'uploadUrlThumb' => '/core/tester/asror/upload.aspx?model=CoreInput&attribute=zfileinputwidget',

    ]
]);
