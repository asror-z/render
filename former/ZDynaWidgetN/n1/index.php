<?php

use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\models\ware\WareAccept;
use zetsoft\widgets\former\ZDynaWidget_Nurbek;

$model = new ShopOrder();

echo ZDynaWidget_Nurbek::widget([
    'model' => $model

]);
