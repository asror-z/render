<?php

use zetsoft\widgets\menus\ZSideNavbar;

echo ZSideNavbar::widget([

]);

echo ZSideNavbar::widget([
    'config' => [
        'theme' => ZSideNavbar::theme['cyan-skin'],
        'background' => ZSideNavbar::background['bg-success']
    ]
]);
