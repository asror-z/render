<?php

use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZPopoverXWidget;

$button =  ZKSelect2Widget::widget([
    'name' => 'name',

    'data' => [
        1,
        2   
    ],
    'config' => [
        'grapes' => false,
    ]
]);


echo ZPopoverXWidget::widget([
    'config' =>  [
        'button'=> 'wbutton',
        
        'content' => $button,
        'width'=> '1100px',
        'height'=> '150px',

    ]
]);

?>

