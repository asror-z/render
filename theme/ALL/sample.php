<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZPillTabWidget;
use zetsoft\widgets\themes\ZRowWidget;

echo 'ZColWidget Sample' . EOL;

ZColWidget::begin([
   'config' => [
       'width' => 4,
       /*'align' => ZColWidget::Align['none']*/
   ]
]);

echo ZCardWidget::widget([]);
echo ZCardWidget::widget([]);
echo ZCardWidget::widget([]);
ZColWidget::end();

echo EOL.EOL;



echo 'ZColWidget Sample' . EOL;


ZRowWidget::begin();


ZColWidget::begin();

echo ZCardWidget::widget([
    'config' => [

    ]

]);



echo ZCardWidget::widget([]);

ZColWidget::end();

ZColWidget::begin();

echo ZCardWidget::widget([
    'config' => [

    ]

]);

ZColWidget::end();

ZColWidget::begin();

echo ZCardWidget::widget([
    'config' => [

    ]

]);

ZColWidget::end();

ZColWidget::begin();

echo ZCardWidget::widget([
    'config' => [

    ]

]);
ZColWidget::end();

ZRowWidget::end();

echo EOL.EOL;



echo 'ZColWidget Sample' . EOL;


echo ZPillTabWidget::widget([
    'config' => [
        'TabColor' => ZPillTabWidget::PillColor['light-blue']
    ],
    'data' => [
        'First tab' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.',

        'New tab' => ZCardWidget::widget([
            'config' => [
                'type' => ZCardWidget::type['wavesEffect']
            ],
        ]),
        'Drop Down' => [
            'action' => '#',
            'Another action' => '#',
            'Something' => '#'
        ]
    ]
]);

echo EOL.EOL;


