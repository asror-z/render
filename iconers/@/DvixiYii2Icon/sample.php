<?php
use zetsoft\widgets\iconers\ZBootstrapIconpickerWidget;


echo \dvixi\IconSelectWidget::widget([
 
    'attribute' => 'attributeName',
    'items' => $data,
    'options' => [
        //Html::activeInput() options
    ],
    'pluginOptions' => [
        // iconselect.js options
    ]
    ])


?>

