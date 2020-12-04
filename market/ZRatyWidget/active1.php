<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\market\ZRatyWidget;
use zetsoft\widgets\market\ZRatyWidget1;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
?>
    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-3">



<?php
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRatyWidget1::class,
                        'options' => [
                            'data' => $items,
                            'config' => [
                                'hasPlace' => true,
                            ]
                    ]
                    ]
                ],

            ],

        ],


    ]
);
$this->activeEnd();
?>

            </div>
        </div>
    </div>
