
<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCMultiselectWidget;
use zetsoft\widgets\inptest\ZFabianMultiselectWidget;
use zetsoft\system\Az;


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
$model->configs->rulesAll = [
	[validatorEmail]
];

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFabianMultiselectWidget::class,
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

