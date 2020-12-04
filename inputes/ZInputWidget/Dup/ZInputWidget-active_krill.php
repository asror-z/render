<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputKrillWidget;
use zetsoft\widgets\inputes\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZInputWidget;

$model = $this->modelGet(CoreInput::class, 7);
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
                'zinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputUniverseWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                        ],
                    ]
                ],

            ]
        ],
    ],
]);

$this->activeEnd();

