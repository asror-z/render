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

echo ZFormBuildWidget::widget([
    'model' => new UserBlocked(),
    'config' => [
        'type' => ZFormBuildWidget::type['naked'],
    ]
]);
