<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaTestWidget;

$model = new \zetsoft\models\shop\ShopOrder();

echo ZDynaTestWidget::widget([

    'model' => $model,

    'config' => [

        'pjax' => true,

    ],

]);
