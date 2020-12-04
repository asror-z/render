<?php


use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\View;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSelect2WidgetNew;

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
                    'widgetClass' => ZKSelect2WidgetNew::class,
                    'options' => [
                        'config' => [
                            'tags' =>true,
                            'multiple'=>true,
                            'isMaintainOrder' => true,
                            'maximumInputLength' => 10
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

