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
use zetsoft\models\ALL\Test;
use zetsoft\models\user\User;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */

$laptop = new Test();


$this->title = "Вход в систему ZAllApps";

$model = $this->modelGet(Test::class, 1);
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

$form = $this->activeEnd();