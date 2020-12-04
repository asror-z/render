<?php
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use zetsoft\cnweb\ALL\tester\MirbositController;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\models\user\User;
use zetsoft\widgets\inputes\ZKSelect2NewWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;



$model = new PageAction();

$form = ActiveForm::begin();

$model->configs->rulesAll = [
    [validatorEmail]
];

// Top most parent
echo $form->field($model, 'id')->widget(Select2::class, [
    'data' => ArrayHelper::map(User::find()->asArray()->all(), 'id', 'name')
]);

// Child level 1
echo $form->field($model, 'data')->widget(DepDrop::class, [
    'options' => ['placeholder' => 'Select ...',  'id' => 'PageAction-data'],
    'pluginOptions' => [
        'depends' => ['PageAction-id'],
        'url' => Url::to(['/core/tester/sunnat/depdrop']),
    ]
]);

// Child level 2
echo $form->field($model, 'check')->widget(DepDrop::class, [
    'options' => ['placeholder' => 'Select ...'],
    'select2Options' => ['pluginOptions' => ['allowClear' => true]],
    'pluginOptions' => [
        'depends' => ['PageAction-data'],
        'url' => Url::to(['/core/tester/sunnat/deprod']),
        'loadingText' => 'Loading child level 2 ...',
    ]
]);

ActiveForm::end();


