<?php


use zetsoft\dbitem\core\WebItem;
use zetsoft\models\core\CoreSetting;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\models\user\User;
use zetsoft\models\shop\ShopOrder;

/** @var ZView $this */




$model = new ShopOrder();

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [

        'showFooter' => true,
//        'titleSummary' => true,
//        'isCard' => false,
//        'columnBefore' => false,
//        'columnAfter' => false,
        'hasToolbar' => false,
        'search' => false,
//        'heighbody' => '100%',
        'filter' => false,
//        'summary' => true,
//        'perfectScrollbar' => false,
//        'striped' => false,
//        'panelTemplate' => "{items}",
    ]

]);
