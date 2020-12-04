<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 * Created By:ElnurController Suyunov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */



use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZPopoverCardWidget;
use zetsoft\widgets\themes\ZRowWidget;

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 12
    ]
]);

echo ZPopoverCardWidget::widget([
    'config' => [
    'items' =>[
        [
            'cardImage' =>'http://www.venmond.com/asset/vendroid/img/avatar/avatar.jpg' ,
            'cardUserName' =>'Gabriella Mont' ,
            'cardUserAdress' =>'San Diego',
            'bgColor' =>'bg-success'
        ] ,
        [
            'cardImage' =>'http://www.venmond.com/asset/vendroid/img/avatar/avatar-2.jpg' ,
            'cardUserName' =>'Jonathan Fuzzy' ,
            'cardUserAdress' =>'Seattle',
            'bgColor' =>'bg-light'
        ]
        ,[
            'cardImage' =>'http://www.venmond.com/asset/vendroid/img/avatar/avatar-3.jpg' ,
            'cardUserName' =>'Sakura Hinata' ,
            'cardUserAdress' =>'Hawaii',
            'bgColor' =>'bg-info'
        ]
        ,[
            'cardImage' =>'http://www.venmond.com/asset/vendroid/img/avatar/avatar-3.jpg' ,
            'cardUserName' =>'Sakura Hinata' ,
            'cardUserAdress' =>'Hawaii',
            'bgColor' =>'bg-info'
        ]


    ]


]
]);



ZColWidget::end();
ZRowWidget::end();
