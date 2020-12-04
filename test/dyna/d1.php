<?php

use zetsoft\models\shop\ShopOrder;
//use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidget_Nurbek;

$model = ShopOrder::find()->one();

echo ZDynaWidget_Nurbek::widget([
    'model'=> $model
]);







