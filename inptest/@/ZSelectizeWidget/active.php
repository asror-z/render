<?php


use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZSelect2WidgetOLD;
use zetsoft\widgets\inputes\ZSelectizeWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
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
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectizeWidget::class,
                    'options' => [
                        'data' => $data = [
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
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();



