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
use zetsoft\widgets\former\ZDynaWidgetM;
use zetsoft\widgets\former\ZDynaWidgetX10052020;

$model = new EyufDocument();

echo ZDynaWidgetM::widget([
    'model' => $model
]);
