<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget1;
use zetsoft\widgets\inputes\ZSelect2WidgetAjax;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


$data = [
    'btn' => 'btn',
    'mt' => 'mt',
    'mt-2' => 'mt-2',
    'mt-3' => 'mt-3',
    'btn-lg' => 'btn-lg',
    'btn-sm' => 'btn-sm',
    'btn-primary' => 'btn-primary',
    'btn-success' => 'btn-success',
    'btn-danger' => 'btn-danger',
    'btn-warning' => 'btn-warning',
    'btn-info' => 'btn-info',
    'btn-dark' => 'btn-dark'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2WidgetAjax::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'url' => '/core/tester/restjson/api2.aspx',
                            'tags' =>true,
                            'multiple' => false,
                            'ajax.data' => true,
                            'ajax.result' => true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

