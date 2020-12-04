<?php


use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZDynaWidgetD;
use zetsoft\widgets\former\ZDynaWidgetStorage;


$data = [];

$model = new NeedForm();
$form = clone $model;

$form->title = 'ssssssssss';
$form->position = 78777;
$data[] = $form;

$form = clone $model;
$form->title = 'aaaaaaaa';
$form->position = 999999;
$data[] = $form;

$model = new NeedForm();
$model->configs->spa = false;



echo ZDynaWidgetStorage::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
       'array' => true,

    ]
]);

