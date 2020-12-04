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

use zetsoft\widgets\former\ZWizardSteps1Widget;
use zetsoft\widgets\former\ZWizardStepsWidget;

echo ZWizardSteps1Widget::widget([
    'config' => [
        'type' => ZWizardStepsWidget::type['wiz4'],
        'data' => [
            ['Section1', 'Section1`s content here', 'image/700x500/1.jpg'],
            ['Section2', 'Section2`s content here', 'image/700x500/2.jpg'],
            ['Section3', 'Section3`s content here', 'image/700x500/3.jpg'],
            ['Section4', 'Section4`s content here', 'image/700x500/4.jpg'],
            ['Section5', 'Section5`s content here', 'image/700x500/1.jpg'],
            ['Section6', 'Section6`s content here', 'image/700x500/2.jpg'],
            ['Section7', 'Section7`s content here', 'image/700x500/3.jpg'],
            ['Section8', 'Section8`s content here', 'image/700x500/4.jpg'],
        ]
    ]
]);
