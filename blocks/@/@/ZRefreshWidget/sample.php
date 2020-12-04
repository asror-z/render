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

use zetsoft\widgets\blocks\ZRefreshWidget;

echo ZRefreshWidget::widget([
           'config' => [

               'type' => ZRefreshWidget::type['reload'],
               'interval' => 2000,
               'stopBlock' => 'div.content-wrapper',
               'pjaxButton' => '#zGrid'
           ]

]);
