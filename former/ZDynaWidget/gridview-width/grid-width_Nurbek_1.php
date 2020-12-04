<?php

use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\former\ZDynaWidget;

$model = ShopOrder::find()->all();
echo ZDynaWidget::widget([
    'model' => $model,

]);


