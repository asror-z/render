<?php

use kartik\builder\Form;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\place\PlaceRegion;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZNestable2Widget;
use zetsoft\widgets\navigat\ZNestableTwoWidget;
use zetsoft\widgets\places\ZGoogleDbWidget;


//$model = $this->modelGet(\zetsoft\models\core\CoreCategory::class, 7);
/** @var ZView $this */
/*
 * $items = Az::$app->forms->modelz->data();
**/

echo ZNestable2Widget::widget([
    'config' => [
        'modelClassName' => PlaceRegion::class,
        'parentAttribute' => 'parent_id',
//        'sortAttribute' => 'sort',
    ]
]);

