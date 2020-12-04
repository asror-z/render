<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\shop\ProductItem;
;

use zetsoft\dbitem\shop\TestItem;
use zetsoft\former\shop\ColorForm;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\models\cpas\CpasLand;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidget;

$sites = new PlaceCountry();
$sites->configs->nameOn = [
    'name',
    'alpha2'
];
$sites->columns();
echo ZDynaWidget::widget([
    'model' => $sites
]);
