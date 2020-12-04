<?php

use zetsoft\dbitem\shop\ProductItem;
use zetsoft\widgets\former\ZHintCssMasterWidget;
use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidgetMalikaZuhriddin;
use zetsoft\widgets\market\ZMButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

$item = new ProductItem();
$item->price = [123];
$item->currency = "$";


echo ZMButtonWidget::widget([

'config' => [],
       'model' => $item

]);
