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
use zetsoft\widgets\former\ZDynaWidget;

$model = new User();
 

$model->configs->readonliesEx = [
    'name'
];

$model->columns();

echo ZDynaWidget::widget([
    'model' => $model,

]);
