<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\cards\ZAzCardWidget;
use zetsoft\widgets\market\ZMSwiperWidget;

echo ZMSwiperWidget::widget([

    'data' => [

        ZAzCardWidget::widget([
        'config'=>[
            'url' => 'https://av.ru/lp/b2b/pic/b2b/pleasure/pleasure7.png',
            'title'=>'Документы — вместе с заказом',
            'content' => 'Вместе с продуктами вы получаете полный пакет заранее согласованных документов',
        ]
        ]),
        ZAzCardWidget::widget([
            'config'=>[
                'url' => 'https://av.ru/lp/b2b/pic/b2b/pleasure/pleasure1.png',
                'title'=>'Индивидуальный сервис',
                'content' => 'Заключим договор, выберем способ оплаты, согласуем персональные цены: они отобразятся на сайте после авторизации',

            ]
        ]),
        ZAzCardWidget::widget([
            'config'=>[
                'url' => 'https://av.ru/lp/b2b/pic/b2b/pleasure/pleasure3.png',
                'title'=>'Индивидуальный сервис',
                'content' => 'Заключим договор, выберем способ оплаты, согласуем персональные цены: они отобразятся на сайте после авторизации',

            ]
        ]),
        ZAzCardWidget::widget([
            'config'=>[
                'url' => 'https://av.ru/lp/b2b/pic/b2b/pleasure/pleasure5.png',
                'title'=>'Индивидуальный сервис',
                'content' => 'Заключим договор, выберем способ оплаты, согласуем персональные цены: они отобразятся на сайте после авторизации',

            ]
        ]),
       
    ],
    'config' => [
        'slideWidget' => true,
         ''
    ]
]);

