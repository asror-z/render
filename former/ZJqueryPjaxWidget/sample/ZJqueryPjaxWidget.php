<?php


use zetsoft\widgets\former\ZJqueryPjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;



echo ZJqueryPjaxWidget::widget([
    'config' => [
        'func'=>'pjaxFor',
        'timeout' => 650,
        'url' => '/eyuf/logics/shop/user/map.aspx',
        'replace' => false,
        'maxCacheLength' => 20,
        'version' => '',
        'scrollTo' => 0,
        'type' => ZJqueryPjaxWidget::type['get'],
        'dataType' => ZJqueryPjaxWidget::dataType['html'],
        'push' => true,
        'container' => '#bla',
        'selector' => '#select',
    ]
]);

?>

    <div class="row">



        <div id="bla">



        </div>


    </div>



<?php

echo ZButtonWidget::widget([
    'id' => 'select',
    'config' => [
        'class' => 'btn btn-success',
        'text' => 'PjaxTest'
    ],
    'event' => [
        'click' => 'function() {
             pjaxFor("/logics/shop/user/map.aspx");
         }'
    ]
]);

  ?>

