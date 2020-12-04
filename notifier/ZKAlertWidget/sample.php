<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\widgets\Alert;
use zetsoft\widgets\notifier\ZKAlertWidget;

echo ZKAlertWidget::widget([
        'config' => [
            'type' => Alert::TYPE_SUCCESS,
            'body' => 'Вход в систему "Эл-юрт умиди"',
            'title' => 'Система интранет',
            'delay' => 5000,
            'isShowSeparator' => true,
        ]
]);
