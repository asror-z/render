<?php

/**
 *
 *
 * Author:  Daho
 *
 *
 */

use zetsoft\widgets\navigat\ZAccordionCollapseWidget;

echo ZAccordionCollapseWidget::widget([
        'config' => [
        'animated' => 1000,
        'active' => 0,
        'isicons' => true,
        'icons' => '',
        'accordions' => [
            [
                'title' => 'Section 1',
                'content' => 'Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content ',
            ],

            [
                'title' => 'Section 2',
                'content' => 'Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of  Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3',
            ],

            [
                'title' => 'Section 3',
                'content' => 'Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of Section 3Content of  Section',
            ],

            [
                'title' => 'Section 4',
                'content' => 'Content of Section Content of Section Content of Section Content of Section Content of Section Content of Section Content of Section Content of Section Content of Section ',
            ],
        ]
    ],
    
]);
