<?php

use kartik\builder\Form;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2AjaxWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
/** @var ZView $this */

$items = \zetsoft\system\Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => 'Ajax search',
                            'url' => Url::to([
                                'service',
                                'namespace' => 'inputs',
                                'service' => 'typeaheads',
                                'method' => 'ajax',
                                'args' => '',
                            ]),
                            'minimumInputLength' => 1,
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => 'Ajax search with multipele select ...',
                            'url' =>  Url::to([$this->controlId . '/select-ajax']),
                            'minimumInputLength' => 1,
                            'multiple' => true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);
$this->activeEnd();

