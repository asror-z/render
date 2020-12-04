<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\market\ZNumberCounterWidget;

/** @var CoreInput $model */
$model = $this->modelGet(CoreInput::class, 6);

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
                'bool_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZNumberCounterWidget::class,
                    'options' => [
                        'config' => [
                        ]
                    ]
                ],
            ]
        ],
    ],

]);
$this->activeEnd();

?>

    </div>
     </div>
</div>
