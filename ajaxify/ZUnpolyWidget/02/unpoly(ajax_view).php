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
use zetsoft\system\kernels\ZView ;
use zetsoft\widgets\ajaxify\ZUnpolyWidget;


$this->title = 'unpoly' ;


echo ZUnpolyWidget::widget([
    'config' => [
        'url' => '/core/tester/ajaxify/content.aspx',
        'type' => ZUnpolyWidget::type['target'],
        'class' => 'btn btn-warning',
        'selector'=>'#content'
    ]
]);

