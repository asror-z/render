<?php


use kartik\builder\Form;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopProduct;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSelect2WidgetRav;

/** @var ZView $this */
$model = $this->modelGet(ShopProduct::class, 197);

echo ZKSelect2Widget::widget([
    'model' => $model,
    'attribute' => 'measure',
    'config' => [
        'ajax' => true
    ],
]);

