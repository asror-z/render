<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\blocks\ZJqueryKnobWidget;

echo \zetsoft\widgets\blocks\ZJqueryKnobWidgetReadOnly::widget([
    'config' => [
    'value' => 400000,
    'max' => 4000000
    ]
]);
