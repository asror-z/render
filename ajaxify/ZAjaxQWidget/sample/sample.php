<?php

use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'first',
        'dataType' => 'html',
        'url' => "/ravshan/ravshan/information.aspx",

],
    'event' => [
        'complete' => <<<JS
        function myFunction(text){
            //var value = JSON.parse(text.responseText);
           $('#firstPre').text(text.responseText);
           console.log(text.responseText);
        }
JS,
    ]

]);
?>

<button id="first" class="btn" onclick="first()">Click to 1 AJAXQ</button>

<div class="row container">
      <div class="col-md-6">
            <pre id="firstPre" height="400px">

            </pre>
      </div>
</div>
