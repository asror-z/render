<?php
/** @var ZView $this */

use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZSelectize2Widget;


$model = $this->modelGet(CoreInput::class, 3);


$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$data = [
    1 => '111111111',
    2 => '222222222',
    3 => '333333333',
    4 => '444444444',
    5 => '555555555',
    6 => '666666666'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectize2Widget::class,
                    'options' => [
                        'data' => $data,
                    ],
                ],
            ]
        ],
    ]
]);

$this->activeEnd();
