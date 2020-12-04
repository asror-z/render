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


use zetsoft\system\helpers\ZHTML;
use zetsoft\widgets\images\ZCarouselSlickWidget;

echo ZCarouselSlickWidget::widget([
    'bAutoplay' => true,
    'bInfinite' => true,
    'iAutoplaySpeed' => 100,
    'items' => [
        ZHTML::img('/slick/pexels-photo-248797.jpg'),
        ZHTML::img('/slick/pexels-photo-248797.jpg'),
        ZHTML::img('/slick/pexels-photo-248797.jpg'),
        ZHTML::img('/slick/pexels-photo-248797.jpg'),
        ZHTML::img('/slick/pexels-photo-248797.jpg'),
    ]
]);
