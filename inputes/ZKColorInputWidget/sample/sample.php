<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */



use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZKColorInputWidget;

$model = $this->modelGet(CoreInput::class, 6);

echo  ZKColorInputWidget::widget([
    'model' => new zetsoft\models\core\CoreInput(),
    'attribute' => 'string_2',
]);
