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
use zetsoft\widgets\former\ZDynaWidget_Axror;
use zetsoft\widgets\former\ZDynaWidget_Axror2;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new User();
 

$model->configs->readonliesEx = [
    'name'
];

$model->columns();

echo ZDynaWidget_Axror2::widget([
    'model' => $model,

]);

