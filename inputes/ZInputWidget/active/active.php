<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZInputWidget_Umid_1;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

 ?>

 <div class="container">

 <?php
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_2' => [
                    'widgetClass' => ZInputWidget_Umid_1::class,
                    'type' => Form::INPUT_WIDGET,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'placeholder' => 'Value',
                            'changeSubmit' => true,
                            'type' => ZInputWidget_Umid_1::type['text'],
                        ],
                        'event' => [
                            'change' => <<<JS
    function() {
        $(this).submit()
    }
JS,

                        ],
                    ],
                ],
            ],

        ],
    ]
]);

$this->activeEnd();
?>
 </div>

