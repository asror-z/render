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

$model = new UserBlocked();
$form = $this->activeBegin();

echo ZFormBuildWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'stepType' => ZFormBuildWidget::stepType['tab'],
        'blocktype' => ZFormBuildWidget::blockType['naked']
    ]
]);

$this->activeEnd();
