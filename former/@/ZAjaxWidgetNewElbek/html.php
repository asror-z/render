<div class="myHtml"></div>
<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZAjaxWidgetNewElbek;
use zetsoft\widgets\navigat\ZButtonWidget;


echo ZButtonWidget::widget([
    'event' => [
        'click' => <<<JS
    function()  {
        ajax(zurl = 'google.com')
    }
JS,

    ]
]);



echo ZAjaxWidgetNewElbek::widget([
    'config' => [
        'func' => 'ajax',
        'dataType' => 'html',
        'url' => "/rad0/rad0/img.aspx",
],
    'event' => [

        'success' => "function(data) {
                $(\".myHtml\").html(data); 
          }",
    ]
]);
