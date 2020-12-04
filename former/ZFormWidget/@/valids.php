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


use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\libra\EntryForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

$model = new EntryForm();
$form = $this->activeBegin();
Az::$app->forms->modelz->form($model);
Az::$app->forms->modelz->post();


ZCardWidget::begin([
    'config' => [
        'title' => 'dsafasdf'
    ]
]);

echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 2,
    'attributes' => [
        'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
        'email' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
        'country' => ['type' => Form::INPUT_TEXT],
    ]
]);

// echo ZHTML::submitButton('Register', ['class' => 'btn btn-primary']);
echo ZButtonWidget::widget([
    'config' => [
        'color' => ZButtonWidget::btnStyle['btn-outline-primary'],


        'icon' => ZButtonWidget::icon['fa-save'],
        'url' => '',
        'name' => '',
    ]
]);
//    ]
//    'names' => [
//        'name',
//        'title',
//    ],
//    ,
//    'config' => [
//        'submitBtn' => true,
//        'isCnt' => false,
//        'name' => Az::l('OneBlock'),
//        'type' => ZFormWidget::type['all'],
//    ],


ZCardWidget::end();

$this->activeEnd();
