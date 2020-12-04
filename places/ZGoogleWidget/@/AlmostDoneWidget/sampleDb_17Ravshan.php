<?php


use zetsoft\widgets\places\ZGoogleDbWidgetRavshan;

echo ZGoogleDbWidgetRavshan::widget([
    'config' => [
        'searchAutoComplete' => true,
        'searchPlaceImageShow' => true  ,
        'depend' => [
            'dependPlace' => true,
            'depend_id' => 'string_9',
        ],
        'zoom' => '12',
        'draggable' => true,
        'matkerCount' => 1
    ]
]);
