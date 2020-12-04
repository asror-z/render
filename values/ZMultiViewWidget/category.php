<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\test\Test;
use zetsoft\models\App\eyuf\EyufCompatriot;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\values\ZMultiViewWidget;
use zetsoft\widgets\values\ZMultiViewWidgetD;

$model = $this->modelGet(ShopCategory::class, 1871);
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
                'shop_option_type' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiViewWidget::class,
                    'options' => [
                        'config' => [
                            'formClass' => 'zetsoft\\former\\shop\\OptionTypeForm',
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

