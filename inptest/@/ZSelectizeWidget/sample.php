<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\inputes\ZSelectizeWidget;

$data = [
    1 => 'sadasd',
    2 => 'sadasd',
    3 => 'sadasd',
    4 => 'sadasd',
];
echo ZSelectizeWidget::widget([
    'options' => [
        'data' => $data
    ]
]);
