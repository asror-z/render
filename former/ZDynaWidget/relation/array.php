<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\dbitem\data\Config;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderCopy;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\column\ZEditableSweetColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\former\ZExportWidgetNew;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;

$model = new ShopOrder();
$model->configs->hasOne = [
    'User' => [
        'user_id' => 'id',
        'responsible' => 'id',
        'operator' => 'id',
        'deleted_by' => 'id',
        'created_by' => 'id',
        'modified_by' => 'id',
    ],
    'ShopOrder' => [
        'parent' => 'id',
        'children' => 'id',
    ],
    'PlaceAdress' => [
        'place_adress_id' => 'id',
    ],
    'PlaceRegion' => [
        'place_region_id' => 'id',
    ],
    'UserCompany' => [
        'source' => 'id',
    ],
    'ShopRejectCause' => [
        'shop_reject_cause_id' => 'id',
    ],
    'ShopDelay' => [
        'shop_delay_id' => 'id',
    ],
    'ShopDelayCause' => [
        'shop_delay_cause_id' => 'id',
    ],
    'ShopPackaging' => [
        'packaging' => 'id',
    ],
    'ShopShipment' => [
        'shop_shipment_id' => 'id',
    ],
    'ShopCoupon' => [
        'shop_coupon_id' => 'id',
    ],
    'ShopChannel' => [
        'shop_channel_id' => 'id',
    ],
];
$model->configs->hasMulti = [
    'UserCompany' => [
        'user_company_ids' => 'id',
    ],
    'ShopElement' => [
        'shop_element_ids' => 'id',
    ],
    'Ware' => [
        'ware_ids' => 'id',
    ],
];
$model->configs->hasMany = [
    'CpasTracker' => [
        'shop_order_id' => 'id',
    ],
    'CallsCdr' => [
        'shop_order_id' => 'id',
    ],
    'CallsCel' => [
        'shop_order_id' => 'id',
    ],
    'CallsOrder' => [
        'shop_order_id' => 'id',
    ],
    'CallsRecord' => [
        'shop_order_id' => 'id',
    ],
    'CallsUserman' => [
        'shop_order_id' => 'id',
    ],
    'ShopOrder' => [
        'parent' => 'id',
        'children' => 'id',
    ],
    'ShopOrderCopy' => [
        'parent' => 'id',
        'children' => 'id',
    ],
    'ShopOrderItem' => [
        'shop_order_id' => 'id',
    ],
    'ShopPayment' => [
        'shop_order_id' => 'id',
    ],
];
$model->configs->relationMany = [
    'shop_order_id' => 'ShopOrderItem',
    'parent' => 'ShopOrder',
    'id' => 'ShopOrder',
];
$model->configs->relationMulti = [
    'shop_order_id' => 'ShopOrderItem',
];

$model->columns();

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'relationMany' => true,
        'relation' => true,
        'relationMulti' => true,
    ]
]);
