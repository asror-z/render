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

use zetsoft\models\shop\ShopBrand;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\test\TestOrder;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */                               //$model = $this->modelGet(Computer::class, 66);

$model = new TestOrder();
$model->configs->labelSpan = 2;
$active = new Active();
$form = $this->activeBegin();
Az::$app->forms->modelz->form($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'type' => ZFormWidget::type['allbl'],
       // 'columnsCount' => 2,
    ]
]);


$this->activeEnd();
