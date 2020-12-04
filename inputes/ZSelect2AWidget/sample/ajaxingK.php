<?php

use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\bootstrap4\Modal;
use yii\web\View;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\shop\ShopOrderCopy;
use zetsoft\models\shop\ShopOrderTest;
use zetsoft\service\forms\Active;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSelect2WidgetRav;

$model = new PlaceCountry();

echo ZKSelect2WidgetRav::widget([
    'model' => $model,
    'attribute' => 'continent',
    'config' => [
        'ajax' => true,
        'tags' => false,
    ]
]);

