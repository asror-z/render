<?php

/**
 *
 *
 * Author:  Dilshodjon olimov
 *
 *
 */

use zetsoft\widgets\animo\ZAllMagicWidget;

echo ZAllMagicWidget::widget([
    'config' => [
        'animationName' => ZAllMagicWidget::animationName['swap'],
        'frontColor' => '#ff5500',
        'backColor' => '#5555ff',
        'loadingTime' => 5000,
    ]
]);
