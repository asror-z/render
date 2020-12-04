<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\actions\ZRecaptchaV3Widget;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\system\Az;

$model = $this->modelGet(CoreInput::class, 6);
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
                'string_2' => [
                    'widgetClass' => ZRecaptchaV3Widget::class,
                    'type' => Form::INPUT_WIDGET,
                    'options' => [
                        'config' => [
                            'url' => '/render/actions/ZRecaptchaV3Widget/form.aspx',
                            'method_type' => ZRecaptchaV3Widget::method_type['post'],
                            'site_key' => '6LcDHLwZAAAAAI3W7vkMBOleSFpq5i-TmXHZHfE9',
                        ],

                    ],
                ],
            ],

        ],
    ]
]);

$this->activeEnd();

