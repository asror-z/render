<?php


use zetsoft\widgets\menus\ZMMmenu3Widget;
use zetsoft\widgets\menus\ZMmenuWidget;
use zetsoft\widgets\menus\ZMMmenuWidgetMapNew;
use zetsoft\widgets\menus\ZMMmenuWidgetMapNew1;


echo ZMMmenuWidgetMapNew1::widget([
    'config' => [
        'content.img.width' => 80,
        'iconbar.top' => [
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'iconbar.bottom' => [
            "<a href='#/'><i class='fa fa-home'></i>aa</a>",
            "<a href='#/'><i class='fa fa-home'></i>cc</a>",
        ],
        'all.border' => ZMMmenuWidgetMapNew1::border['border-full'],
    ],
]);

