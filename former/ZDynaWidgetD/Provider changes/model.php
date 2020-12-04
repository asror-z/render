<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidgetD;

;

$model = new User();

echo ZDynaWidgetD::widget([
    'model' => $model,
    'config' => [
        'type' => ZDynaWidgetD::type['model']
    ]
]);
