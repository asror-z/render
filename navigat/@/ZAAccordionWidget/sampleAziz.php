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
use zetsoft\widgets\navigat\ZGAccordionWidgetAziz;

echo ZGAccordionWidgetAziz::widget([
    'config' => [
        'class' => 'class',
        'title' => 'accoridon 1',
        'content' => ZGAccordionWidgetAziz::widget([
        'config' => [
            'title' => 'kjbkhbhjbk',
            'content' => ZGAccordionWidgetAziz::widget(),
        ]
        ]),
        'hone' => 'headingOne',
        'cone' => 'collapseOne',
        'textColor' => 'text-primary',
        'width' => '100'
    ]
]);
