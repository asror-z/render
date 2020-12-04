<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidgetOLD;
use zetsoft\widgets\inptest\ZMCheckboxImageWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;


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
                    'widgetClass' => ZImageCheckboxGroupWidgetOLD::class,
                    'options' => [
                      
                        'data' => [

                        ],

                        'config' => [
                            'radio' => 'false',
                             

                        ]
                    ],
                ],
            ]
        ],
    ]
]);    /*
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxWidget::class,
                    'options' => [
                       

                        'config' => [

                        ]
                    ],
                ],
            ]
        ],
    ]
]);
      */
     

$this->activeEnd();

//echo ZMRadioMultiWidget::widget();
//echo \zetsoft\widgets\market\ZFooterMenu1::widget();
//echo \zetsoft\widgets\market\ZFooterMenu::widget();
