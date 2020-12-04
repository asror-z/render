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

echo ZGAccordionWidget::widget([
    'config' => [
        'class' => 'class',
        'title' => 'accoridon 1',
        'content' => ZGAccordionWidget::widget([
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
