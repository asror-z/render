<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZPrettyCheckboxWidget;

echo ZPrettyCheckboxWidget::widget([
        'config' => [
            'placeholder' => 'test1',
            'outer_class_name' => 'p-default p-thick p-round',
            'color_class_name' => 'p-success',
        ]
    ]) . '<br>' . 
    ZPrettyCheckboxWidget::widget([
        'config' => [
            'placeholder' => 'test2',
            'outer_class_name' => 'p-icon p-plain',
            'icon' => 'fas fa-lock',
        ]
    ]) . '<br>' .
    ZPrettyCheckboxWidget::widget([
        'config' => [
            'placeholder' => 'test3',
            'outer_class_name' => 'p-switch p-fill',
            'color_class_name' => 'p-warning',
        ]
    ]) . '<br>' .
    ZPrettyCheckboxWidget::widget([
        'config' => [
            'placeholder' => 'test4',
            'outer_class_name' => 'p-icon p-plain',
            'icon' => 'fas fa-close',
        ]
    ]);
