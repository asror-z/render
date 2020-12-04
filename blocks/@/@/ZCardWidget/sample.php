<?php

use zetsoft\widgets\blocks\ZExpandableSearch;

echo ZExpandableSearch::widget([

    'config' => [
        'type' => 'text',
        'name' => 'search',
        'sSearchTxt' => 'Searching for:',
        'sErrorTxt' => 'Ehem, I can\'t search nothing',
        'placeholder' => 'Type to search',
        'aInputOptions' => [
        'aca',
        'aca',
        'aca',
        'aca',
        ]
    ]

]);
