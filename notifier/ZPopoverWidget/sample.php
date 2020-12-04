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

use zetsoft\widgets\notifier\ZModalWidget;
use zetsoft\widgets\notifier\ZPopoverWidget;






$content = '<div class="bg-success">
    <p>
        dsfdfgdsfsdfsdfsdfd
    </p>   
</div>';

echo ZPopoverWidget::widget([
    'config' => [
        'type' => ZPopoverWidget::type['central'],
        'position' => ZPopoverWidget::position['top'],
        'sidePosition' => ZPopoverWidget::SidePositon['right'],

        'content' => $content,
        'styleType' => ZPopoverWidget::StyleType['success'],
        'frameSidePosition' => ZPopoverWidget::FrameSidePosition['bottom'],
        'closeButtonTitle' => 'Close',
        'checkButtonTittle' => 'Save',
        'triggerButtonStyle' => ZPopoverWidget::TriggerButtonStyle['secondary'],
        'triggerButtonTitle' => 'show me',
    ]
]);

