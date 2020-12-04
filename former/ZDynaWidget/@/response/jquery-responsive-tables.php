<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidgetAz;
use zetsoft\widgets\former\ZDynaWidgetDDDDD;
use zetsoft\widgets\former\ZDynaWidgetLaziz;
use zetsoft\widgets\former\ZDynaWidgetShahzod;

$model = new ShopOrder();



echo ZDynaWidgetLaziz::widget([
    'model' => $model,
    'config' => [
        'floatHeader' => false,
        'hasToolbar' => false,
        'columnBefore'=>['false'],
        'perfectScrollbar' => false,
    ]
]);
