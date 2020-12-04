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

use kartik\widgets\Growl;
use zetsoft\models\shop\ShopBrand;
use zetsoft\models\test\TestOrder;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

$model = new ShopBrand();
$active = new Active();
$form = $this->activeBegin();
Az::$app->forms->modelz->form($model);


$this->notifySuccess('success');
$this->notifyError('success');
$this->notifyInfo('success');
$this->notifyWarning('success');

echo ZSessionGrowlWidget::widget([
    'model' => $model,
    'config'=>[

        'title' => 'Well done!',
        'body' => 'You successfully read this important alert message. 1',

    ]
]);



echo ZDynaWidget::widget([
    'model' => $model,
    /*'form' => $form,
    'config' => [
        'type' => ZFormWidget::type['all'],
        'columnsCount' => 2,
    ]*/
]);


$this->activeEnd();
