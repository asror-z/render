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


use kartik\builder\Form;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;

use zetsoft\models\libra\Library;
use zetsoft\models\vade\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZMultiWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
$model = $this->modelGet(Computer::class, 1);
$laptopModel = new TestLaptopForm();

$form = $this->activeBegin();

$this->modelSave($model);


$this->title = "Вход в систему ZAllApps";


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);


$form = $this->activeEnd();
