<?php

use zetsoft\widgets\blocks\ZElfinderWidget;
use zetsoft\widgets\blocks\ZElfinderWidget2;
use zetsoft\widgets\blocks\ZElfinderWidgetSherzod;


$type = [];


 echo ZElfinderWidgetSherzod::widget([
    
    'config' => [
        'type' => ['directory', 'text/x-php', 'text/html']
    ]
]);

