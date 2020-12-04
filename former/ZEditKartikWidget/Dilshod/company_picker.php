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
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;

$form = $this->activeBegin();

$model = $this->modelGet(\zetsoft\models\user\UserCompany::class, 3);


echo ZEditRavWidget::widget([
    'model' => $model,
    'attribute' => 'name',
    'config' => [
        'isSession' => true,
    ]

    //'editableValueOptions'=>['class'=>'text-success h2']
]);

$this->activeEnd();




