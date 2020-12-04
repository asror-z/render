<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */

$laptop = new CoreInput();

$this->title = 'Вход в систему ZAllApps';

$model = new User();

$form = $this->activeBegin();

$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);




$this->activeEnd();
