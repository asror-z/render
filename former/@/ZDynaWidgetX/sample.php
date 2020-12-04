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
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidgetD;
use zetsoft\widgets\former\ZDynaWidgetX10052020;

$model = new Order();

echo ZDynaWidgetX10052020::widget([
    'model' => $model
]);
