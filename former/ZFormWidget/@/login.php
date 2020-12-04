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


use zetsoft\former\auth\LoginForm;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */

$model = new LoginForm();
$form = $this->activeBegin();

if (Az::$app->forms->modelz->form($model))
    Az::$app->forms->modelz->post();

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
