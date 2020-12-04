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
use zetsoft\widgets\former\ZDatatableWidgetD;
use zetsoft\widgets\former\ZResponsiveTableWidget;


echo ZDatatableWidgetD::widget([
    'model' => new ShopOrder()
]);

