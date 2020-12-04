<?php

use zetsoft\widgets\market\ZMProductSortWidget;

echo ZMProductSortWidget::widget([
    'config' => [
        'sort-items' => ['Newest', 'Cool Stuff', 'Bestmarkets'],
        'sort-label' => 'Sort:',
        'default-selected' => 'Not Sorted',
        'found-label' => 'Found producs',
        'found-number' => 250
    ]
]);

