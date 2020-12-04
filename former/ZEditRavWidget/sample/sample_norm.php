<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\former\ZEditRavWidgetD;
use zetsoft\widgets\former\ZKEditableWidgetNorm;
use zetsoft\widgets\inputes\ZKStarRatingWidget;

echo ZEditRavWidgetD::widget([
    'name' => 'name',
    'widgetClass' => ZKStarRatingWidget::class,
     'config' => [
        'session' => true
     ]
]);
