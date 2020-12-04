<?php

use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;
use zetsoft\models\market\ScholarOLD;
use zetsoft\widgets\former\ZViewWidget;

$model = new User();
echo ZViewWidget::widget([
    'model' => $model,
    
]);
