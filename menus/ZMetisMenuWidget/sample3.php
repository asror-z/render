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
use zetsoft\widgets\menus\ZMetisMenuWidgetA;


echo \zetsoft\widgets\menus\ZMetisMenuWidgetA::widget([
    'config' => [
        'MenuOpen' => false,
        'type' => ZMetisMenuWidgetA::type['Category'],
    ],
]);
