<?php

use zetsoft\widgets\blocks\ZHBsLabelWidget;

echo ZHBsLabelWidget::widget([
    'config' => [
        'type' => ZHBsLabelWidget::type['danger'],
        'content' => 'Content',
        'sPrefix' => 'Content ',
        'sTag' => 'button',
    ]
]);
