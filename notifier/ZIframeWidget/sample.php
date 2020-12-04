<?php

use zetsoft\widgets\notifier\ZIframeWidget;


echo ZIframeWidget::widget([
     'config' =>[
         'url' => '/admin/core-action/index.aspx',
     ]
]);

