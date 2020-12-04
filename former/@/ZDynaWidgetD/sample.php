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
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new EyufDocument();

echo ZDynaWidgetD::widget([
    'model' => $model
]);
