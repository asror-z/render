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

$model = EyufDocument::findOne([
    'id' => 14
]);

echo ZDownloadWidget::widget([
    'model' => $model,
    'attribute' => 'file',
]);
