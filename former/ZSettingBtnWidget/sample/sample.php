<?php
// start|MuminovUmid|2020-10-09
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZSettingBtnWidget;

$model = new User();
echo ZSettingBtnWidget::widget([
    'model' => $model,
]);
// end|MuminovUmid|2020-10-09
