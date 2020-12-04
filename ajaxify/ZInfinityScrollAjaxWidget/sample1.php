<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;




echo ZInfinityScrollAjaxWidget::widget([
    'config' => [
        'appendTo' => 'appendTo',
        'item' => null,
        'pageAttribute' => 'page',
        'limitAttribute' => 'limit',
        'url' => 'infinity.aspx',
        'limitPost' => 3,
        'requireUrl' => '/render/cards/ZListViewWidget/ready/vertical_horizontal.php',
        'defaultItem' => 'item',
        'grid' => 'row w-100',
        'cols' => 3,
        'ajaxMethod' => ZInfinityScrollAjaxWidget::method['get'],
        'namespace' => 'market',
        'service' => 'product',
        'method' => 'allCompanies',
        'test' => false,
        'isCommon' => true,
        'type'=>ZInfinityScrollAjaxWidget::type['type'],
        'btn-style'=> 'outline-success',
        'args'=> '0|2'
    ]
]);
