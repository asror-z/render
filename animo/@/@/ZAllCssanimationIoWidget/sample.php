<?php

/**
 *
 *
 * Author:  Dilshodjon olimov
 *
 *
 */

use zetsoft\widgets\animo\ZAllCssanimationIoWidget;
use zetsoft\widgets\animo\ZAllMagicWidget;

echo ZAllCssanimationIoWidget::widget([
    'config' => [
        'tag' => 'h1',
        'text' => 'ZAllCssanimationIoWidget',
        'disabled' => false,
        'isRandom' => false,
        'type' => ZAllCssanimationIoWidget::type['doorCloseFromLeft'],
    ]
]);
