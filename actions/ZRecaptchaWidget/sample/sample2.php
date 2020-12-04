<?php

use zetsoft\widgets\actions\ZRecaptchaWidget;

echo ZRecaptchaWidget::widget([
    'config' => [
        'type' => ZRecaptchaWidget::type['v2-checkbox'],
    ]

]);



