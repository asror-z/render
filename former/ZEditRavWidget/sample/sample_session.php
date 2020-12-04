<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\former\ZEditRavWidgetD;
use zetsoft\widgets\inputes\ZImgCheckboxWidget;

echo ZEditRavWidget::widget([
    'name' => 'company',
    'config' => [
        'session' => true,
        'widgetClass' => ZImgCheckboxWidget::class
    ]
]);
