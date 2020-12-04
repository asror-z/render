<?php
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;


$action->icon =true;
$model = new PageAction();
$form = ActiveForm::begin();

// Top most parent
echo $form->field($model, 'id')->widget(\zetsoft\widgets\inputes\ZKDepDropWidget::class, [
    'config' => [
        'id' => 'PageAction-id',
        'target' => \zetsoft\models\page\PageModule::class,
    ]
]);

// Child level 1
echo $form->field($model, 'type')->widget(\zetsoft\widgets\inputes\ZKDepDropWidget::class, [
    'config' => [
        'id' => 'PageAction-data',
        'depend' => ['PageAction-id'],
        'target' => \zetsoft\models\page\PageControl::class,
        'parent' => \zetsoft\models\page\PageModule::class,
    ]
]);

// Child level 2
echo $form->field($model, 'check')->widget(\zetsoft\widgets\inputes\ZKDepDropWidget::class, [
    'config' => [
        'id' => 'PageAction-check',
        'depend' => ['PageAction-data'],
        'target' => \zetsoft\models\page\PageAction::class,
        'parent' => \zetsoft\models\page\PageControl::class,
    ]
]);

ActiveForm::end();


