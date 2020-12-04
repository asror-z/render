<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\UserBlocked;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormBuildWidgetD;
$model = new UserBlocked();
$this->modelSave($model);
$this->modelPost();

$form = $this->activeBegin();

echo ZFormBuildWidgetD::widget([
    'model' => $model,
]);

$this->activeEnd();
