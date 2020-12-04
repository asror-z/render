<?php

use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\system\assets\ZColor;
use zetsoft\widgets\former\ZDynaWidgetM;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new ShopOrder();
    echo ZDynaWidget::widget([
    'model' => $model,
]);
