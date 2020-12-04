<?php

use kartik\editable\Editable;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 7);
echo Editable::widget([
    'model' => $model,
    'attribute' => 'string_4',
    'type' => 'primary',
    'size'=> 'lg',
    'inputType' => Editable::INPUT_RATING,
    'editableValueOptions' => ['class' => 'text-success h3']
]);
