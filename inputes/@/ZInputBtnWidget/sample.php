<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inputes\ZInputBtnWidget;
use zetsoft\widgets\inputes\ZInputLatinWidget;

echo ZInputBtnWidget::widget([
    'id' => 'inputBtn',
    'event' => [
        'buttonClick' => <<<JS
            function() {
                let inputValue = $('#inputBtn').val()
                console.log(inputValue)            
            }
JS,

    ]
]);
