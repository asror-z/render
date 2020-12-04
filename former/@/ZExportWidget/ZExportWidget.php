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
use zetsoft\widgets\former\ZExportWidget;

$model = new User();

echo ZExportWidget::widget([
    'model' => $model,
    'config' => [
        'filename' => 'test',

    ]
]);
