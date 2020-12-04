<?php

use kartik\widgets\Select2;

$data = [
    [
        'id' => '0',
        'text' => 'WEB',
        'children' => [
            [
                'id' => 'php',
                'text' => '- php'
            ],

            [
                'id' => 'asp',
                'text' => ' - asp'
            ]
        ]

    ],

    [
        'id' => 'C++',
        'text' => 'C++'
    ],

    ['id' => 'C#',
        'text' => 'C#'
    ],

    ['id' => 'Pyton',
        'text' => 'Pyton'
    ],

    [
        'id' => 'JAVA',
        'text' => 'JAVA'
    ],

];

echo '<label class="control-label">Provinces</label>';

echo Select2::widget([
    'name' => 'state_10',
    'data' => $data,
    'options' => [
        'placeholder' => 'Select provinces ...',
        'multiple' => true
    ],
]);
