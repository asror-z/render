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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;

/** @var ZView $this */
$this->title = 'sample_02';
Az::$app->controller->layout = 'test2';

echo ZIntercoolerWidget::widget([
    'config' => [
        'url' => '/core/tester/ajaxify/content.aspx',
        'method' => ZIntercoolerWidget::type['post-to'],
        'title' => 'go to content',
        'class' => 'btn btn-warning'
    ]
]);



