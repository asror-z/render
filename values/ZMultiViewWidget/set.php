<?php


use kartik\builder\Form;
use zetsoft\former\shop\PriceHistoryForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\ALL\Test;
use zetsoft\models\App\eyuf\EyufCompatriot;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\values\ZMultiViewWidget;
use zetsoft\widgets\values\ZMultiViewWidgetD;

$model = $this->modelGet(ShopCatalog::class, 12821);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'price_history' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidget::class,
                    'options' => [
                        'config' => [
                            'formClass' => PriceHistoryForm::class,
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

