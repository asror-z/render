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

use zetsoft\widgets\charts\ZAllChartsWidget;

echo ZAllChartsWidget::widget([
'config' => [
    'types'=>ZAllChartsWidget::type['stackedWaterfallChart'],
]

]);
