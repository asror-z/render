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
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new User();

$model->configs->nameOnEx = [
    'email'
];

echo ZDynaWidgetD::widget([
    'model' => $model
]);
