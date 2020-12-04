<?php

use kartik\depdrop\DepDrop;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use zetsoft\former\deps\DepDropForm;

$form = ActiveForm::begin();

$model = new DepDropForm();
$catList = [
    1 => 'Electronics',
    2 => 'Books',
    3 => 'Home',
    4 => 'Kitchen'
];

// Parent
echo $form->field($model, 'cat')->dropDownList($catList, ['id'=>'cat-id']);

// Child # 1
echo $form->field($model, 'subcat')->widget(DepDrop::classname(), [
    'options'=>['id'=>'subcat-id'],
    'pluginOptions'=>[
        'depends'=>['cat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/core/tester/test-bot/subcat'])
    ]
]);

// Child # 2
echo $form->field($model, 'prod')->widget(DepDrop::classname(), [
    'pluginOptions'=>[
        'depends'=>['cat-id', 'subcat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/core/tester/test-bot/prod'])
    ]
]);

ActiveForm::end();
