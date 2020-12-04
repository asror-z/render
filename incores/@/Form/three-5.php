<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use yii\helpers\Html;
use kartik\builder\Form;
use zetsoft\former\ALL\CurrencyUzForm;
use zetsoft\former\test\LaptopFormTest;
use zetsoft\models\shop\PaysCurrency;
use zetsoft\models\core\PaysCurrencyNew;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZKFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;

/** @var ZView $this */

/** @var PaysCurrencyNew $model */
$model = $this->modelGet(PaysCurrencyNew::class, 1);
$form = $this->activeBegin();
$this->modelPost();
$this->modelSave($model);

$active = new LaptopFormTest();
$formName = 'PaysCurrencyNew' . '[bank]';

$active->formName = $formName;

if (!empty($model->bank))
    $active->setAttributes($model->bank);


echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller
    // using $_POST['kvform']
    'model' => $model,
    'form' => $form,
    // 'formName' => basename($model::className()),

    // default grid columns
    'columns' => 2,

    // set global attribute defaults
    'attributeDefaults' => [
        'type' => Form::INPUT_TEXT,
        'labelOptions' => ['class' => 'col-md-3'],
        'inputContainer' => ['class' => 'col-md-9'],
        'container' => ['class' => 'form-group'],
    ],

    'attributes' => [
        'date' => [
            'label' => 'date',
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => ZHInputWidget::class,
            /*   'options' => [
                   'value' => $model->date
               ]*/
        ],

        'bank' => [
            'label' => 'bank',
            'type' => Form::INPUT_WIDGET,
            'widgetClass' => ZKFormWidget::class,
            'options' => [
                'active' => $active,
                'form' => $form,
            ]
        ],


    ]
]);

echo ZHTML::submitButton('Вход в систему',
    [
        'class' => 'btn btn-primary'
    ]);

$this->activeEnd();
