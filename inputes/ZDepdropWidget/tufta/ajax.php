<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZDepdropWidget;
use zetsoft\widgets\inputes\ZDepdropWidgetNorm;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZDepdropWidgetRav;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(ShopCatalog::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'shop_element_id' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => 'load data',
                            'ajax' => true,
                        ]
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
