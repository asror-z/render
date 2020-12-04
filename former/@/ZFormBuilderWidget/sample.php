<?php

use zetsoft\former\test\TestLaptopForm;

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZRowWidget;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use kartik\builder\Form;
use yii\helpers\Html;

$model = new TestLaptopForm();
$this->modelForm($model);
// Az::$app->utility->mains->post();

$this->grape=true;

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'config' => ['width' => 12]
    ]
]);

echo ZFormBuildWidget::widget([
    'model' => $model,
]);

ZColWidget::end();
ZRowWidget::end();


