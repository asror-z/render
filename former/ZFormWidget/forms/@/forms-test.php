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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);
$model = new CurrencyUzForm();

$form = $this->activeBegin();
$this->formModel($model);
$this->modelPost();

ZCardWidget::begin([
    'config' => [
        'title' => 'dsafasdf'
    ]
]);



echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);


ZCardWidget::end();

$this->activeEnd();
