<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

/*$models = new LaptopForm();

$app = new ALLApp();

$config = new Config();
$config->title = Az::l('Компьютеры');

$app->configs = $config;

$column = new Form();
$column->title = Az::l('Название');
$column->widget = ZHInputWidget::class;
$column->rules = [
    [
        'zetsoft\\system\\validate\\ZRequiredValidator',
    ],
];

$app->columns['name'] = $column;
$app->columns['title'] = $column;

$app->cards = [];


   

$model = Az::$app->forms->former->model($app);


Az::$app->forms->modelz->form($model);
Az::$app->forms->zPjax->begin();

Az::$app->forms->modelz->post();

Az::$app->forms->active->enableLabel = true;
Az::$app->forms->active->labelSpan = 4;
$form = $this->activeBegin();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'isCnt' => false,
        'type' => ZFormWidget::type['all'],
    ]
]);


$this->activeEnd();
Az::$app->forms->zPjax->end();

