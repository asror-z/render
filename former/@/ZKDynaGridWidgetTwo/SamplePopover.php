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

use zetsoft\models\page\PageModule;
use zetsoft\widgets\former\ZKDynaGridNewWidget3;

$model = new PageModule();

echo ZKDynaGridNewWidget3::widget([
    'model' => $model
]);
