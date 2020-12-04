<?php


use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll=[
    [
        validatorEmail
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
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'config' => [
                            'url' => '/core/tester/restjson/api1.aspx',
                            'tags' =>true,
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

