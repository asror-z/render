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

use zetsoft\widgets\notifier\ZJspanelWidget;

echo ZJspanelWidget::widget([
    'config'=>[
        'id' => 'iddd',
        'iconbar' => [
            [
                'icon' => 'fa-eraser',
                'func' => 'panel.content.innerHTML = \'\';'
            ],
            [
                'icon' => 'stop-circle',
                'func' => 'panel.content.innerHTML = \'\';'
            ],
            [
                'icon' => 'fa-trash',
                'func' => 'panel.content.innerHTML = \'\';'
            ],
        ]
    ]
]);
