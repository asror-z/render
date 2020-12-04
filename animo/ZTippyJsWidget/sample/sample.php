<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\animo\ZTippyJsWidget;

echo ZTippyJsWidget::widget([
'config' =>  [
      'content'=>'rtrt',
      'followCursor'=>'horizontal',
      'image'=>[
        'url'=>'https://unsplash.it/200/?random'
      ]
]
]);
