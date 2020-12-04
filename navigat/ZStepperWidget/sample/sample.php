<?php

use zetsoft\widgets\navigat\ZStepperWidget;

echo \zetsoft\widgets\navigat\ZStepperWidget::widget([
    'data' => [
        1 => 'Step 1',
        2 => 'Step 2',
        3 => 'Step 3',
        4 => 'Step 4',
    ],

    'config' => [
        'title' => 'Hello',
        'step' => ZStepperWidget::type['step'],
    ]
]);