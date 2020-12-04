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

use zetsoft\widgets\animo\ZProgressbarJsWidgetNew ;
echo ZProgressbarJsWidgetNew::widget([
        'config' => [
        'name' => 'ZProgressbarJsWidgetNew',
        'easing' => 'easeInOut',
        'strokeWidth' => '4',
        'duration' =>'1',
        ]
]);
