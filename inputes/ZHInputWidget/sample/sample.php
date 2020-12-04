<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\inputes\ZHInputWidget;

echo ZHInputWidget::widget([
    'config' => [
    ],
    
    'active' => [
        'change' => true,
        'click' => true
    ],

    'event' => [
        'change' => <<<JS
function(event){
    console.log('saf');
    $('#asror').click();

}
JS,

        'keyup' => <<<JS


function(event){
    console.log('saf');
    $('#asror').click();

}

JS,
    ],
]);
