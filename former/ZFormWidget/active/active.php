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

use zetsoft\service\forms\Active;
use zetsoft\system\kernels\ZView;
use zetsoft\system\validate\ZRequiredValidator;
use zetsoft\widgets\former\ZFormWidget;
use function foo\func;

/** @var ZView $this */

$this->title = 'Вход в систему ZAllApps';

$model = new User();

$model->configs->rules = function (){
    return ZRequiredValidator::class;
};  
$model->columns();

$active = new Active();

$form = $this->activeBegin($active);

$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

$this->activeEnd();
