<?php


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;


use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */


$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


?>

<div class="container">


<?php
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'tooltip' => 'asdfsdff',
                            'hasPlace' => true,
                            'hasIcon' => true,
                            //'class' => 'md-form',

                        ]
                    ]
                ],

            ],

        ],


    ]
]);

$this->activeEnd();
?>

</div>


