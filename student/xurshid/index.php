<?php

use zetsoft\models\test\TestXurshid;
use zetsoft\widgets\former\ZDynaWidget;


$model = new TestXurshid();
echo ZDynaWidget::widget([
'model' => $model
]);
