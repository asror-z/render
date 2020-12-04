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


use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\widgets\navigat\ZDownloadWidgetNew;

$model = EyufDocument::findOne([
    'id' => 14
]);

echo ZDownloadWidgetNew::widget([
    'model' => $model,
    'attribute' => 'file',
]);
