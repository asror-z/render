<?php

/**
 *
 *
 * Author:  Obidov Yasin
 */

use zetsoft\widgets\market\Zcccardwidget;
use zetsoft\widgets\market\ZFooterMenu;
use zetsoft\widgets\navigat\ZButtonWidget;

echo Zcccardwidget::widget([

]);


echo ZFooterMenu::widget([
    'config' => [
        //'color' => '#10b410',
        'class' => '',
        'url' => '/bozor/login/user_register.aspx#menu',
        'registrationUrl' => '/cores/auth/login.aspx#menu',
    ]
]);





