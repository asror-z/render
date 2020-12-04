<?php

use kartik\builder\Form;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCheckboxImageWidget;
use zetsoft\widgets\inputes\ZCheckCheckboxListWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [ // 2 column layout
                'zcheckcheckboxlistwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>ZCheckCheckboxListWidget::class,
                    
                ),

            ]
        ]


    ]
]);


$this->activeEnd();

