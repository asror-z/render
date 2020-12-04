<?php


use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZSelect2Widget2;
use zetsoft\system\Az;
use yii\helpers\Url;

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
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget2::class,
                    'options' => [
                       /* 'data' => [
                          'asd' => '123',
                          '123' => 'asd',
                          'asds' => 'asdd',
                          'asd123' => '123123',
                        ],*/
                        'config' => [
                            'url' =>  '/api/core/restjson/api1.aspx',
                            'tags' => true,
                           // 'ajax.data' => 0,
                           // 'ajax.result' => 0,
                           // 'ajax' => true,
                           // 'dataType' => 'jsonb',
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

