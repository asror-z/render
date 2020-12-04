<?php


use kartik\grid\DataColumn;
use zetsoft\former\eyuf\RavshanForm_3;
use zetsoft\widgets\former\ZArrayWidget4;
use zetsoft\widgets\former\ZArrayWidget_2;


$data = [];

$model = new RavshanForm_3();
$form = clone $model;

$form->title = 'ssssssssss';
$form->name = 78777;
$data[] = $form;

$form = clone $model;
$form->title = 'aaaaaaaa';
$form->password = 999999;
$data[] = $form;

$form = clone $model;
$form->title = 'eeeeeeeee';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = 'aaaaaaaa';
$form->password = 1234;
$data[] = $form;

$return = [];
foreach ($data as $item) {
    $itemArray = [];
    foreach ($item->columnsList() as $name) {
        $itemArray[$name] = $item->$name;
    }

    $return[] = $itemArray;
}


$array = [
    [
        'password' => 1234,
        'name' => 'Paul',
        'text' => 'asddcvdcbc@gmail.com',
    ],
    [
        'password' => 12787734,
        'name' => 'John',
        'text' => 'abaSASc@gmail.com',
    ],
    [
        'password' => 12324234,
        'name' => 'Rick',
        'text' => 'abc@gmail.com',
    ],
];


$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],

        [
            'class' => DataColumn::class,
            'attribute' => 'name',

        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'text',
        ],

    ];


echo ZArrayWidget_2::widget([
    'model' => $model,
    'data' => $data
]);
