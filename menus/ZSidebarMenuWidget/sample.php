<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\menus\ZSidebarMenuWidget;

echo ZSidebarMenuWidget::widget([
    'name' => '123',
    'config' => [
        'open' => false,
        'name' => 'Категории',
    ],
]);
