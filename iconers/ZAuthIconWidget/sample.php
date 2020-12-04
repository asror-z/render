<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 * Created By: Abdurakhmonov Umid
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\iconers\ZAuthIconWidget;

//Az::$app->controller->layout = 'main';


$data = [
    '/eyuf/cores/main/index.apsx' => [
        'fb' => 'facebook-f'
    ],
    '/eyuf/cores/main/index2.apsx' => [
        'git' => 'github'
    ],
    '/eyuf/cores/main/index3.apsx' => [
        'tw' => 'twitter'
    ],
    '/eyuf/cores/main/index4.apsx' => [
        'gplus' => 'google-plus-g'
    ],
    '/eyuf/cores/main/index5.apsx' => [
        'li' => 'linkedin-in'
    ],
];

echo ZAuthIconWidget::Widget([
    'data' => $data
]);
