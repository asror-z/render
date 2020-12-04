<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZExportWidget;
use zetsoft\widgets\former\ZExportWidgetNew;

$model = new User();

echo ZExportWidgetNew::widget([
    'model' => $model,
    'config' => [
        'filename' => 'test',
        'dropdownOptions.label' => Az::l('Экспорт'),
    ]
]);
