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


use zetsoft\former\ALL\CurrencyUzForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\shop\PaysCurrency;
use zetsoft\models\core\PaysCurrencyNew;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZKFormGridNewWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */

$model = $this->modelGet(PaysCurrencyNew::class, 1);
// $model = new CoreCurrencyForm();

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

ZCardWidget::begin([
    'config' => [
        'title' => 'dsafasdf'
    ]
]);



echo ZKFormGridNewWidget::widget([
    'model' => $model,
    'form' => $form,
    'attribute' => 'cbu'
]);


ZCardWidget::end();

$this->activeEnd();
