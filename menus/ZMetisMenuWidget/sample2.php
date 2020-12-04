<?php
/**
 *
 *
 * Author:  Murodov Mirbosit
 * https://github.com/onokumus/metismenu
 * https://www.cssscript.com/accordion-dropdown-menu-metismenu/
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 *
 */


use zetsoft\system\Az;
use zetsoft\widgets\menus\ZMetisMenuWidget;


echo \zetsoft\widgets\menus\ZMetisMenuWidget::widget([
    'config' => [
        'MenuOpen' => false,
        'type' => ZMetisMenuWidget::type['Category'],
    ],
]);
