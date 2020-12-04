<?php


use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\widgets\former\ZArrayWidget;


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



echo ZArrayWidget::widget([
    'model' => new NeedForm(),
    'data' => $data,
]);

