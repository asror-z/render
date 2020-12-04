<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use szetsoft\models\App\eyuf\Order;
use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZResponsiveTableWidget;
use zetsoft\widgets\former\ZSettingBtnWidget;
use zetsoft\models\shop\ShopOrder;


$model = new PlaceCountry();



echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'floatHeader' => false,
        /*'hasToolbar' => true,*/
        /*'columnBefore'=>['false'],*/
        /*'perfectScrollbar' => false,*/
    ]
]);

echo ZResponsiveTableWidget::widget([
]);
