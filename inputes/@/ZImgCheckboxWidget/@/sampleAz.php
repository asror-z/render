<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZImgCheckboxWidgetAz;

echo ZImgCheckboxWidgetAz::widget([
    'data' => [
        1 => '<img src="https://picsum.photos/seed/1/100" />',
        2 => '<img src="https://picsum.photos/seed/2/100" />',
        3 => '<img src="https://picsum.photos/seed/3/100" />',
        4 => '<img src="https://picsum.photos/seed/4/100" />',
    ],
    'config' => [
        'type' => ZImgCheckboxWidgetAz::type['checkboxGroup'],
    ]
]);

