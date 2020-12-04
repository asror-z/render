<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/26/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\testing\ZPrettyCheckboxWidget;

echo ZPrettyCheckboxWidget::widget([
    'prettyType' => 'default',
    'fillType' => 'thick',
    'label' => 'Check',
    'type' => 'checkbox',
    'squareType' => 'curve',
    'animation' => 'tada',
    'color' => 'success-o',
]);
echo ZPrettyCheckboxWidget::widget([
    'prettyType' => 'default',
    'fillType' => 'fill',
    'type' => 'checkbox',
    'toggle' => true,
    'labelOn' => 'Subscribed',
    'labelOff' => 'Subscribe',
    'colorOn' => 'success',
    'colorOff' => 'danger',

]);
