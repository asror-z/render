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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;

$model = new UserBlocked();

/** @var ZView $this */
$this->modelSave($model);
$form = $this->activeBegin();

echo ZFormBuildWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'stepType' => ZFormBuildWidget::stepType['smartTab'],
        'blockType' => ZFormBuildWidget::blockType['lilo'],
    ]
]);

$this->activeEnd();
