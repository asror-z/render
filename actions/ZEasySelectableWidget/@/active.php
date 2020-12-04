<?php

use zetsoft\widgets\actions\ZEasySelectableWidget;
use zetsoft\widgets\actions\ZEasySelectableWidget2;
use zetsoft\widgets\actions\ZEasySelectableWidgetX;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
  $data = [
      'Bosya',
      'Bosya1',
      'Bosya2',
      'Bosya3',
      'Bosya4',
  ];
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZEasySelectableWidget2::class,
                    'options' => [
                            'data' => $data,
                            'config' => [
                            'cols' => ZEasySelectableWidget2::cols['3'],
                            'HasLabel' => true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
