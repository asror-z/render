<?php


use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2AjaxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll=[
    [
        'zetsoft\\system\\validate\\ZRequiredValidator'
    ]
];
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxWidget::class,
                    'options' => [
                        'config' => [
                            'url' => '/api/core/app/select2.aspx',
                            'tags' =>true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

