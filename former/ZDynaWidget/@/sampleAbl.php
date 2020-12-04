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
use zetsoft\widgets\former\ZDynaNewWidget;
use zetsoft\widgets\former\ZDynaWidgetAbl;
use zetsoft\widgets\former\ZDynaWidgetAz;

$model = new User();



echo ZDynaWidgetAbl::widget([
    'model' => $model,
    'config' => [
        'actionButtons' => [
            'update',
            'delete',
            'clone',
            'view',
        ],
        'columnBefore' => [
            'serial',
            'checkbox',
            'action',
            ],
        'columnAfter' => false
    ]
]);
