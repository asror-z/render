<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopReview;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\former\ZEditRavWidgetD;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZImgCheckboxWidget;

/** @var ZView $this */
$model = $this->modelGet(ShopReview::class, 33);

echo ZEditRavWidget::widget([
    'model' => $model,
    'attribute' => 'text',
    'config' => [
        'widgetClass' => ZCKEditorWidget::class
    ]
]);
