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
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */

/** @var PaysCurrencyNew $model */
$model = $this->modelGet(PaysCurrencyNew::class, 1);
$form = $this->activeBegin();
$this->modelPost();
$this->modelSave($model);

$active = new LaptopFormTest();


ZCardWidget::begin([
    'config' => [
        'title' => $this->title,
        'type' => ZCardWidget::type['dynCard'],
    ]
]);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

ZCardWidget::end();


echo ZHTML::submitButton('Вход в систему',
    [
        'class' => 'btn btn-primary'
    ]);

$this->activeEnd();
