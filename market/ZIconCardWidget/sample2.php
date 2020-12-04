<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\market\ZSwiperWidget;


$data = [
    1 => 'asd',
    2 => 'asd',
    3 => 'asd',
    4 => 'asd',
    5 => 'asd',
];

$pageIndex=[

];
echo ZSwiperWidget::widget([
    'data' => $data,

]);
