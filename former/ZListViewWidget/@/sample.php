<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\data\TabItem;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\models\dyna\DynaConfig;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\Product;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;

$model = new ProductItemForm();
$data = Az::$app->market->product->getProductItemForm();
$this->grape=true;

//$model->query = CoreDyna::find()->all();
/*vdd($model);*/

/*echo ZDynaWidget::widget([
    'model' => $model
]);*/

$this->pjaxBegin();

echo ZListViewWidgetOld::widget([
    'model' => $model,
    'data' => $data,
    'config' => [

    ]
]);

$this->pjaxEnd();
