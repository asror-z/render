<?php

use kartik\builder\Form;
use yii\web\JsExpression;
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZAjaxForm;
use zetsoft\system\assets\ZActiveForm;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */
$model = new TestLaptopForm();
Az::$app->forms->modelz->form($model);

$form = ZAjaxForm::begin([
    'ajaxSubmitOptions' => [
        'success' => new JsExpression('function(response) {
        console.log(response);
         $("#test").html(response);   
        }'),
        'complete' => new JsExpression('function() {console.log("request completed.")}')
    ]
]);
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);
ZAjaxForm::end();
