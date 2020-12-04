<?php

/**
 *
 * @todo ZDynaWidget toolbaridan foydalanish bo'yicha namuna
 * @author  Dilshodjon Olimov
 * Agar ushbu sample ishlamayotgan bo'lsa ZDynaWidgetD o'rniga ZDynaWidget yozib ko'ring.
 * @copyright 08.07.2020
 *
 */

use zetsoft\models\core\User;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\shop\ShopCategory;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new PlaceAdress();

echo ZDynaWidgetD::widget([
    'model' => $model,
    'rightNameEx' => [
        'update'
    ]
]);
