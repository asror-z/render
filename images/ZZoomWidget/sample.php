<?php

use zetsoft\widgets\images\ZNanoGalery2Widget;
use zetsoft\widgets\images\ZNanoGaleryWidget;
use zetsoft\widgets\market\ZZoomWidget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

echo ZZoomWidget::widget([
    'data' => [
        'https://picsum.photos/id/1/200/300',
        'https://picsum.photos/id/2/200/300',
        'https://picsum.photos/id/3/200/300',

    ]
]);
