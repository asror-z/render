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


use zetsoft\widgets\menus\ZMetisMenuWidget;
use zetsoft\widgets\menus\ZMetisMenuWidget3;
use zetsoft\widgets\navigat\ZSlimScrollWidget;

echo ZSlimScrollWidget::widget([
    'config' => [
        'content' => ZMetisMenuWidget::widget(),
    ]
]);
/*echo ZMetisMenuWidget::widget([
    'config' => [
        'name' => '11',
        'isName' => false,
        'isAll' => true,
        'isApp' => true,
    ]
]);*/
