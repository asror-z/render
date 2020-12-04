<?php

use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\widgets\inputes\ZKDepDroppWidgetCopy2;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

$model = new PageAction();

//$catList = [
//    1 => 'Electronics',
//    2 => 'Books',
//    3 => 'Home & Kitchen'
//];

$form = ActiveForm::begin();



// Top most parent
echo $form->field($model, 'title')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(PageModule::find()->asArray()->all(), 'id', 'name')
]);

// Child level 1
echo $form->field($model, 'title')->widget(DepDrop::classname(), [
    'options' => ['placeholder' => 'Select ...'],
    'select2Options' => ['pluginOptions' => ['allowClear' => true]],
    'pluginOptions' => [
        'depends' => ['PageAction-title'],
        'url' => Url::to([$this->context->id . '/depdrop', 'target' => 'CoreControl', 'parent' => 'page_module_id']),
        'loadingText' => 'Loading child level 1 ...',
    ]
]);

// Child level 2
echo $form->field($model, 'name')->widget(DepDrop::classname(), [
    'options' => ['placeholder' => 'Select ...'],
    'select2Options' => ['pluginOptions' => ['allowClear' => true]],
    'pluginOptions' => [
        'depends' => ['PageAction-title'],
        'url' => Url::to([$this->context->id . '/depdrop', 'target' => 'PageAction', 'parent' => 'page_control_id']),
        'loadingText' => 'Loading child level 2 ...',
    ]
]);



ActiveForm::end();
