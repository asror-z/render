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

$model->configs->orderCheck = true;
$model->configs->editClass = FormDB::editClass['sweetAs'];
$model->configs->type = Config::type['object'];

$model->columns();

echo ZDynaWidget::widget([
    'model' => $model,
]);
