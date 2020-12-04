<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidgetA;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidgetH;


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
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidgetH
                    ::class,
                    'options' => [

                        'data' => [
                            1 => '<div class="rounded-circle d-flex p-3 mb-3 bg-primary text-white"></div>',
                            2 => '<div class="rounded-circle d-flex p-3 mb-3 bg-danger text-white"></div>',
                            3 => '<div class="rounded-circle d-flex p-3 mb-3 bg-primary text-white"></div>',
                            4 => '<div class="rounded-circle d-flex p-3 mb-3 bg-secondary text-white"></div>',
                            5 => '<div class="rounded-circle d-flex p-3 mb-3 bg-info text-white"></div>'
                        ],
                        
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

