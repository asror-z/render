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


use zetsoft\former\test\TestLaptopForm;

use zetsoft\models\core\CoreInput;
use zetsoft\models\libra\Library;
use zetsoft\models\vade\User;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


/** @var ZView $this */
// $model = $this->modelGet(Laptop::class, 66);

$model = new Computer();
//$model = new Library();
$form = $this->activeBegin();
$this->modelSave($model);


$this->title = "Вход в систему ZAllApps";
/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'submitBtn' => true,
        'isCnt' => false,
        'name' => Az::l('TwoBlock'),
        'type' => ZFormWidget::type['step'],
    ]

]);*/


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'submitBtn' => true,
        'isCnt' => false,
        'type' => ZFormWidget::type['column'],
    ],
    /*    'names' => [
            'name',
            'title',
        ],*/
]);

echo ZButtonWidget::widget([
    'config' => [
        'name' => 'Log In',
    ]
]);


$form = $this->activeEnd();
