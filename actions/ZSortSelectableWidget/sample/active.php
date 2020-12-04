<?php

use zetsoft\widgets\actions\ZSortSelectableWidget;
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

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSortSelectableWidget::class,
                    'options' => [
                        'data' => [
                            'Bosya',
                            'Bosya1',
                            'Bosya2',
                            'Bosya3',
                            'Bosya4',
                            'Bosya5',
                        ],
                        'config' => [
                            //'cols' => ZSortSelectableWidget::cols['5'],
                            'HasLabel' => true,
                        ],
                        'event' => [
                            'checked' => <<<JS
        function() {
            alert()        
        }
JS,

                        ]
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
