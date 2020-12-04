<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZQDatepickerWidget;

$this->title = "ZQDatepickerWidget Valid Required";

$model = $this->modelGet(CoreInput::class, 15);

$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorRequired]
];
echo "Model ID = ". $model->id;
echo "<br>";

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [

        [
            'attributes' => [   
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                ],
               
            ]
        ],

   ],

]);

$this->activeEnd();

