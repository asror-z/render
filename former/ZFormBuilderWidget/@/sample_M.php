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
use zetsoft\widgets\former\ZFormBuildWidgetM;

echo ZFormBuildWidgetM::widget([
    'model' => new UserBlocked(),
    'config' => [
        'stepOption' => [],
    ]
]);
