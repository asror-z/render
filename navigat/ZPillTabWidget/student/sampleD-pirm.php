<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZPillTabWidget;
use zetsoft\widgets\themes\ZCardWidget;

echo ZPillTabWidget::widget([
    'config' => [
        'TabColor' => ZPillTabWidget::pillColor['orange']
    ],
    'data' => [
        'First tab' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.',

        'New tab' => ZCardWidget::widget([
            'config' => [
                'type' => ZCardWidget::type['dynCard']
            ],
        ]),
        'Drop Down' => [
            'action' => '#',
            'Another action' => '#',
            'Something' => '#'
        ]
    ]
]);
