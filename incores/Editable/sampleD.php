<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\apisys\rest\ZEditableAction;
use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopProduct;
use zetsoft\widgets\former\ZEditableWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
$model->attribute = 'form';

$form = $this->activeBegin();



echo ZEditableWidget::widget([
    'model' => $model,
    'attribute' => 'string_3',
    /*'config' => [
        'widgetClass' => ZFormWidget::class,
        'options' => [
            'model' => $model,
           
        ]
    ]*/
]);

$this->activeEnd();
