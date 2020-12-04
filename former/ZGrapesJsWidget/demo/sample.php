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


use zetsoft\widgets\blocks\ZInfoBoxWidget;
use zetsoft\widgets\former\ZGrapesJs;
use zetsoft\widgets\former\ZGrapesJs2;

$config = '<div><h2>hello</h2></div>';

echo ZGrapesJs2::widget([
    'config' => [
        'block' => $config
    ]
]);
