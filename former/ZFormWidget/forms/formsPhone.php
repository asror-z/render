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
use kartik\form\ActiveForm;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\auth\AuthPhoneForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\ALL\Test;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

$model = new Test();

$form = $this->activeBegin();

Az::$app->forms->modelz->form($model);
$this->modelSave($model);


ZCardWidget::begin([
    'config' => [
        'title' => 'asd'
    ]
]);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,

]);

ZCardWidget::end();

$this->activeEnd();
