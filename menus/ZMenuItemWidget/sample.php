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
use zetsoft\widgets\bozor\ZAdressWidget;
use zetsoft\widgets\menus\MenuItemWidget;
use zetsoft\widgets\navigat\ZBreadcrumbsWidget;

//vdd(Az::$app->market->category->getMenuItem(140, false));
echo MenuItemWidget::widget([
     'config' => [
        'menuItem'=> Az::$app->market->category->getMenuItem(141, false)
     ]
]);
   echo ZAdressWidget::widget([
   'config' => [
     'title'=>''
   ]
   ]);
echo ZBreadcrumbsWidget::widget([
    'config' => [
        'mode' => ZBreadcrumbsWidget::mode['category'],
        'category_id' => 549
    ]

]);
/*echo ZBreadcrumbsWidget::widget([
    'config' => [
        'names' => [

        ],
    ]

]);*/
