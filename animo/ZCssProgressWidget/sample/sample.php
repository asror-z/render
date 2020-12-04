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

use zetsoft\widgets\animo\ZCssProgressWidget;

echo ZCssProgressWidget::widget([
    'config' => [
        'type' => ZCssProgressWidget::type['move'],
        'color' => ZCssProgressWidget::color['dark'],
        'TooltipColor' => ZCssProgressWidget::color['dark'],
        'ValueNow' => 2,
        'ValueAfter' => 100,
        'MaxValue' => 100,
        'MinValue' => 0,
    ]
]);
