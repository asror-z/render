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
use zetsoft\widgets\former\ZFormBuildWidgetD;

$model = new UserBlocked();
$form = $this->activeBegin();

echo ZFormBuildWidgetD::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'stepType' => ZFormBuildWidget::stepType['smartTab'],
        'blocktype' => ZFormBuildWidget::blockType['lilo']
    ]
]);

$this->activeEnd();
