<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\deps\DataForm;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;

$model = new \zetsoft\models\test\Test4();

$form = $this->activeBegin();
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form
]);

$this->activeEnd();
