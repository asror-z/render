<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxGroupWidgetM4;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
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
            'attributes' => [       // 2 column layout
                'jsonb_3' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapImgCheckboxGroupWidgetM4::class,
                    'options' => array(
                        'data' => array(
                        'asd',
                        'asd',
                        'asd',
                        'asd',


                        ),
                        'config' => array()
                    )
                ),
            ]
        ]
    ]
]);


$this->activeEnd();
