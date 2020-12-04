<?php

use zetsoft\widgets\blocks\ZGrapesPluginExport;

echo ZGrapesPluginExport::widget([

    'config' => [
        'type' => 'text',
        'name' => 'search',
        'searchTxt' => 'Searching for: ',
        'errorTxt' => 'Ehem, I cannot search nothing',
        'placeholder' => 'Type to search',
        'inputOptions' => [],
    ]

]);
