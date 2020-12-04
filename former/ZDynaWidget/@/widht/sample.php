<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\test\TestOrder;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetAz;

$model = new ShopProduct();

$model->columns();


echo ZDynaWidget::widget([
    'model' => $model,

]);
