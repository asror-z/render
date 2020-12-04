<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;

echo ZModalWidgetRavshan::widget([
'id'=>'asad'
]);
echo ZButtonWidget::widget([
    'event' => [
        'click' => 'function() { $(asad).modal(\'show\') }'
    ]
]);

