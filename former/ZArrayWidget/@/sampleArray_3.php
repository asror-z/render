<?php


use kartik\grid\DataColumn;
use zetsoft\former\eyuf\RavshanForm_3;
use zetsoft\widgets\former\ZArrayWidget4;
use zetsoft\widgets\former\ZArrayWidget_3;


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



echo ZArrayWidget_3::widget([
    'model' => new RavshanForm_3(),
    'data' => $data
]);
