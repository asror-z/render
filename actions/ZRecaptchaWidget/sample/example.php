<?php

use zetsoft\widgets\actions\ZRecaptchaWidget;
use zetsoft\widgets\actions\ZRecaptchaWidgetX;

echo ZRecaptchaWidget::widget([
    'config' => [
        'type' => ZRecaptchaWidget::type['v2-checkbox'],
        'sitekey' => '6Lc26t8UAAAAAFofGeFQJhMmHQR3OexuG3vgP5Ph',
    ]

]);



