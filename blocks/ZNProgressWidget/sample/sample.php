<?php

use zetsoft\widgets\blocks\ZNProgressWidget;

echo  ZNProgressWidget::widget([
        'config' => [
            'test' => true,
            'ajax' => true,
            'pjax' => true,

        ]

]);
