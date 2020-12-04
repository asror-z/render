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
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$url = ZUrl::to([
    '/api/core/app/service',
    'namespace' => 'office',
    'service' => 'word2',
    'method' => 'cashTemplate',
    'args' => '213',
]);

echo ZButtonWidget::widget([
     'config' => [
        'text' => 'Contract',
        'btnType' => ZButtonWidget::btnType['link'],
        'url' => $url,
     ]
]);

/*echo ZCheckButtonWidget::widget([
    'config' => [
        'modelClassName' => $model->className,
        'url' => ZUrl::to([
            'rest/app/word'
        ])
    ]
]);*/
