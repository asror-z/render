<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidgetAz;


echo ZMCheckboxGroupWidgetAz::widget([
    'data' => [
        1 => 'label1',
        2 => 'label2',
        3 => 'label3',
        4 => 'label4',
        5 => 'label5',

    ],
    'config' => [
        'type' => ZMCheckboxGroupWidgetaz::type['MaterialRadioButton']
    ]
]);
