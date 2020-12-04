<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZKColorInputWidget;

$model = $this->modelGet(CoreInput::class, 6);


echo ZKNumberWidget::widget([
    'model' => new zetsoft\models\core\CoreInput(),
    'attribute' => 'string_2',
]);
