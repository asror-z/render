<?php

use kartik\builder\Form;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2AjaxDbWidget;

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
                'string_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxDbWidget::class,

                    'options' => [
                        'config' => [
                            'placeholder' => 'Ajax search',
                            'namespace' => 'inputs',
                            'service' => 'typeaheads',
                            'method' => 'select2',
                            'args' => User::className()."|email",
                            //'args' => User::className()."|email",
                            'url' => Url::to(['/api/core/app/service']),
                            'inpLength' => 1,
                        ],
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxDbWidget::class,

                    'options' => [
                        'config' => [
                            'placeholder' => 'Ajax search with multipele select ...',
                            'namespace' => 'inputs',
                            'service' => 'typeaheads',
                            'method' => 'select2',
                            'args' => User::className()."|email",
                            'url' => Url::to(['/api/core/app/service']),
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

