<?php

/**
 *
 *
 * Author: Normurodov Jasur , Nisonboyev Axrorbek
 * https://github.com/dieulot/instantclick
 * http://instantclick.io/click-test
 *
 *
 */

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\ajaxify\ZUnpolyWidget;

/** @var ZView $this */
//$action->type = WebItem::type['html'];

echo ZUnpolyWidget::widget([
    'config' => [
        'url' => '/core/tester/ajaxify/content.aspx',
        'type' => ZUnpolyWidget::type['dash'],
        'selector' => '#content'
    ]
]);

?>

<div
    id="contento"
    up-history="true"
    class="bg-light"
>layout</div>


