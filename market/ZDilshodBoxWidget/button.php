<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZButtonWidget;

echo ZButtonWidget::widget([
    'event' => [
        'click' =>  function(){
            echo "Hello";
        }
    ]
]);
