<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\ConfigDB;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\test\TestDilshod;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetA;

$model = new TestDilshod();
$model->configs->editClass = ConfigDB::editClass['panel'];

$model->columns();

echo ZDynaWidgetA::widget([
    'model' => $model,
    'config' => [
        'spa' => true
    ]
]);
