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
use zetsoft\former\core\CurrencyForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\test\LaptopFormTest;
use zetsoft\models\shop\PaysCurrency;
use zetsoft\models\core\PaysCurrencyNew;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;

/** @var ZView $this */

$model = new LaptopFormTest();
$form =  $this->activeBegin();
$this->modelPost();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

echo ZHTML::submitButton('Вход в систему',
    [
        'class' => 'btn btn-primary'
    ]);

$this->activeEnd();
