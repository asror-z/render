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
        'class' => 'border z-depth-3',
        'title' => 'accoridon 1',
        'content' => ZGAccordionWidget::widget([
            'config' => [
                'title' => 'blah-blah-blah',
                'content' => 'blah-blah-blah'
            ]
        ]),
        'hone' => 'headingOne',
        'cone' => 'collapseOne',
        'textColor' => 'text-primary',
        'up' => 'fa fa-cloud',
        'width' => '100'
    ]
]);
