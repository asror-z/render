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

use zetsoft\former\ALL\AzimForm;
use zetsoft\former\ALL\MalikaForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;

use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZFormWidget_1;
use zetsoft\widgets\former\ZKFormWidget_1;


/** @var ZView $this */

$laptop = new CoreInput();


$this->title = 'Вход в систему ZAllApps';

$model = new MalikaForm();
$form = ZAjaxForm::begin([
    'formConfig' => [
        'showLabels' => true
    ]
]);

$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
   // 'form' => $form,
    'config' =>[
        'topBtn' => false,
        'botBtn' => true,
    ]
]);


ZAjaxForm::end();
