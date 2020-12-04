<?php

use zetsoft\widgets\blocks\ZElfinderWidget;
use zetsoft\widgets\blocks\ZElfinderWidget2;




$type = [];


 echo ZElfinderWidget::widget([
    
    'config' => [
        'type' => ['directory', 'text/x-php', 'text/html']
    ]
]);

