<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\editable\Editable;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 3);


echo ZEditKartikWidget::widget([
    'model'=>$model,
    'attribute' => 'jsonb_1',
    /*'header' => 'User Rating',
    'asPopover' => true,
    'type'=>'success',
    'size'=>'lg',
    'displayValueConfig'=>[
        1=>'One Star',
        2=>'Two Stars',
        3=>'Three Stars',
        4=>'Four Stars',
        5=>'Five Stars',
    ],*/
    'config' => [
        'inputType'=>Editable::INPUT_WIDGET,
        'widgetClass' => ZSelect2Widget::class,
        'options' => [
            'data' =>[
                'ru' => 'РУССКИЙ ',
                'en' => 'ENGLISH ',
                'uz' => "O'ZBEKCHA",
                'uzk' => 'ЎЗБЕКЧА ',
            ],
            'config' => [
                'enableEvent' => true,
                'placeholder' => '123',
                'imagePath' => true,
            ],
        ]
    ]
    //'editableValueOptions'=>['class'=>'text-success h2']
]);




