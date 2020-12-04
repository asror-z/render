<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZIconPickerWidget;

echo ZIconPickerWidget::widget([
    'config' => [
        'type' => ZIconPickerWidget::type['divIconPicker'],
        'icon' => 'fas fa-plus',
        'placement' => 'auto',
        'searchText' => 'search something',
        'cols' => 4,
        'rows' => 3,
        'align' => 'center',
        'readonly' => false,
        'btncolor' => 'info'
    ]
]);
