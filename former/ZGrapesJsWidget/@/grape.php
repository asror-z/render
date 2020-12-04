<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonT_OLDWidget;



echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGr'
    ],
    'event' => [
        'complete' => <<<JS
      function(data) {
         $('#cl').html(data.responseText);
      }
JS,

    ]
]);



echo ZButtonT_OLDWidget::widget([
    'event' => [
        'click' => <<<JS
       function () {
          ajaxGr('/core/grapes/class.aspx?id=1');
       }
JS,

    ],
    'config' => [
        'layouts' => ZButtonT_OLDWidget::layout['normal'],
        'name' => 'Выбрать Виджет',
        'size' => '500px'
    ]
]);


?>



<div id="cl"></div>
<div id="option"></div>



