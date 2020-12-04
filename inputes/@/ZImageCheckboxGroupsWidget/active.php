<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidgetA;
use zetsoft\widgets\inptest\ZImageCheckboxGroupWidgetOLD;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxGroupWidgetA::class,
                    'options' => [
                        'data' => [
                            1 => 'label1',
                            2 => 'label12',
                            3 => 'label13',
                            4 => 'label14',
                        ],

                        'config' => [

                        ]
                    ],
                ],
            ]
        ],
    ]
]);



$this->activeEnd();
