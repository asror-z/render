<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidget;
use zetsoft\widgets\images\ZLazyloadImgWidget2;
use zetsoft\widgets\inptest\ZMCheckboxImageWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\market\ZMiniCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 12);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
//$this->modelPost();
?>

<?php

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZLazyloadImgWidget2::class,
                    'options' => [

                        'data' => [
                            1 => ZMiniCardWidget::widget(),
                            2 => ZMiniCardWidget::widget(),
                            3 => ZMiniCardWidget::widget(),
                            4 => ZMiniCardWidget::widget(),
                            5 => ZMiniCardWidget::widget(),
                            6 => ZMiniCardWidget::widget(),
                            7 => ZMiniCardWidget::widget(),
                            8 => ZMiniCardWidget::widget(),
                            9 => ZMiniCardWidget::widget(),
                        ],

                        'config' => [
                            'radio' => true,


                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

