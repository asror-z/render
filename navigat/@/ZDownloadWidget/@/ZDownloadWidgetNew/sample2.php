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
use zetsoft\models\App\eyuf\EyufDocumentType;
use zetsoft\widgets\navigat\ZDownloadWidget;
use zetsoft\widgets\navigat\ZDownloadWidgetNew2;

$model = EyufDocument::findOne([
    'id' => 14
]);

echo ZDownloadWidgetNew2::widget([
    'model' => $model,
    'attribute' => 'file'   ,

]);
