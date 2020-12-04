<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\shop\SizeForm;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);


echo ZEditKartikWidget::widget([
    'model' => $model,
    'attribute' => 'string_1',
    'config' => [
        'widgetClass' => ZKStarRatingWidget::class,
        'format' => ZEditKartikWidget::format['button'],
    ]

]);
