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
use zetsoft\former\shop\SizeForm;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZFormWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);


echo ZEditKartikWidget::widget([
    'model'=>$model,
    'attribute' => 'jsonb_5',
    
    'config' => [
        'inputType'=>Editable::INPUT_WIDGET,
        'widgetClass' => ZFormWidget::class,
        'options' => [
            'config' => [
                'formClass' => SizeForm::class
            ]
        ]
    ]

]);
