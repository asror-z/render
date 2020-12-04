<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZImgCheckboxWidget;
use zetsoft\widgets\market\ZMiniCardWidget;
use zetsoft\widgets\themes\ZCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZImgCheckboxWidgetAz::class,
                    'options' => [

                        'data' => [
                            1 => '<img src="https://picsum.photos/seed/1/100" />',
                            2 => '<img src="https://picsum.photos/seed/2/100" />',
                            3 => '<img src="https://picsum.photos/seed/3/100" />',
                            4 => '<img src="https://picsum.photos/seed/4/100" />',
                        ],

                        'config' => [
                            //'radio' => true,
                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

