<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZGAccordionWidget;
use zetsoft\widgets\navigat\ZGAccordionReadmoreWidget;

echo ZGAccordionReadmoreWidget::widget([
    'config' => [
        'class' => 'class',
        'title' => 'accoridon 1',
        'content' => ZGAccordionReadmoreWidget::widget([
            'config' => [
                'title' => 'accordion 2',
                'content' => 'hjbjhhjbhjvhj'
            ]
        ]),
        'hone' => 'headingOne',
        'cone' => 'collapseOne',
        'textColor' => 'text-primary',
        'width' => '100',
    ]
]);
