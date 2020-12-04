<?php
/**
 * @author Muminov Umid
 */

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKRangeWidget;
use zetsoft\widgets\inputes\ZKSliderIonWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
      


        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderIonWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => 'big',
                            "max" => "150",
                            "from" => "40",
                            "to" => "120",
                            'prefix' => ''
                        ],
                    ],
                ],
            ]
        ],
         




    ]
]);


$this->activeEnd();

