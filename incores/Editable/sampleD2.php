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
use zetsoft\apisys\rest\ZEditableAction;
use zetsoft\former\shop\SizeForm;

use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopProduct;
use zetsoft\widgets\former\ZEditableWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = CoreInput::findOne(7);


$form = $this->activeBegin();

echo ZEditableWidget::widget([
    'model' => $model,
    'attribute' => 'jsonb_2',
    'config' => [
        
        'inputType' => Editable::INPUT_WIDGET,
        'widgetClass' => ZFormWidget::class,
        'options' => [
            'config' => [
                'formClass' => SizeForm::class,
            ]
        ]
    ]
]);

$this->activeEnd();
