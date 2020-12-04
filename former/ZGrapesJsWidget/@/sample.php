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

use yii\web\JsExpression;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGrapes',
        'url' => '/core/widget/widget.aspx?class'
    ],
    'event' => [
        'success' => 'function(response) {
            console.log(response)
            $("#widget").html(response); 
        }'
    ]
]);

?>
    <div id="widget"></div>


    <button onclick="ajaxGrapes()">Click to Ajax</button>

<?


echo ZGrapesJsWidget::widget([
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
    ],

    'event' => [
        'componentAdd' => 'function (e) {
        console.log(\'ZGrapesJs | component:add\');
        console.log(\'found id: \' + e.ccid);
        console.log(e);
        }'
    ]
]);
