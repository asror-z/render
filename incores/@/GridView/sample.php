<?php

use zetsoft\widgets\inputes\ZKSelect2Widget;

?>

<div class="container p-5">

<?
echo ZKSelect2Widget::widget([

    'data' => [
        11111,
        22222,
        33333,
        44444,
        55555,
        66666
    ],
    'config' => [
    'placeholder' => 'Select a state',
    'pluginOptions' => [
                'allowClear' => true
            ],
    ]

]);

?>

</div>

<div class="container p-5">


<?

echo ZKSelect2Widget::widget([

    'data' => [
        11111,
        22222,
        33333,
        44444,
        55555,
        66666
    ],
    'config' => [
       
    'placeholder' => 'Select multiple',
    'multiple' => true,
    'pluginOptions' => [
            'allowClear' => true
        ],
    ]

]);

?></div>
