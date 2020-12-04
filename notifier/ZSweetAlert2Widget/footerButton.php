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
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

echo ZSweetAlert2Widget::widget();

echo ZButtonWidget::widget([
    'config' => [
        'teext'
    ]
]);
