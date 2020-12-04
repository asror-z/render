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
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormBuildWidgetA;

echo ZFormBuildWidgetA::widget([
    'model' => new UserBlocked(),
    'config' => [
        //'blockType' => ZFormBuildWidgetA::blockType['lilo'],
        //'stepType' => ZFormBuildWidgetA::stepType['smartTab'],
        'stepOption' => [],
    ]
]);
