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


use zetsoft\widgets\animo\ZProgressBarWidget;

echo ZProgressBarWidget::widget([
    'config' => [
        'items' => [
            [
                'isStriped' => false,
                'isAnimated' => false,
                'width' => '70',
                'label' => 'прогресс',
                'height' => '10',
                'type' => ZProgressBarWidget_new::type['default']
            ],
        ]
    ]
]);
