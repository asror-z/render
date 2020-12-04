<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZTCheckboxGroupWidget;

$this->title = "ZTCheckboxGroupWidget Active";

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 14);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
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
                    'widgetClass' => ZTCheckboxGroupWidget::class,
                    'options' => [
                        'data' => [
                            1 => 'Label 1',
                            2 => 'Label 2',
                            3 => 'Label 3',
                            4 => 'Label 4',
                            5 => 'Label 5',
                            6 => 'Label 6',
                            10 => 'Label 10',
                            20 => 'Label 20',

                        ],

                        'config' => [

                             'type' => ZTCheckboxGroupWidget::Types['ioslike'],
                            /*Types: default || rounded || withtext || ioslike|| flat || materiallike*/
                            'size' => ZTCheckboxGroupWidget::Sizes['middle'],
                            /*Sizes: large || middle || default || small */
                            'color' => ZTCheckboxGroupWidget::Colors['info'],
                            /*Colors: default || info  ||  danger  || warning */

                        ]
                    ],
                ],
            ]
        ],
    ]
]);



$this->activeEnd();
