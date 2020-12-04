<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\blocks\ZCollapseWidget;

echo ZCollapseWidget:: widget([

    'config' => [
        'links' => [
            'question'
        ],
        'contents' => [
            'answer'
        ],
    ]


]);
