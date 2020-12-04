
<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCMultiselectWidget;
use zetsoft\widgets\inptest\ZCrlcuMultiselectWidget;



$data = [
    '1' => '11',
    '2' => '22',
    '3' => '33',
    '4' => '44',
    '5' => '55',
    '6' => '66',
    '7' => '77',
];

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCrlcuMultiselectWidget::class,
                    'options' => [
                        'config' => [
                            'data' => $data
                        ]
                    ]

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

