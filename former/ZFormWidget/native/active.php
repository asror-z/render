<?php use kartik\form\ActiveForm;
use zetsoft\system\helpers\ZHTML;
$model = new \zetsoft\models\user\User();
$form = \yii\widgets\ActiveForm::begin([
    'id' => 'my-form-id',
    'action' => 'save-url',
    'enableAjaxValidation' => true,
    'validationUrl' => '/api/test.aspx',
]); ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= ZHTML::submitButton('Save') ?>
<?php \yii\widgets\ActiveForm::end(); ?>
