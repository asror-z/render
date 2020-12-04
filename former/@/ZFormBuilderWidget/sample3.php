<?php

use zetsoft\models\user\User;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
/*use zetsoft\widgets\inputes\ZFileInputWidget;*/
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\themes\ZRowWidget;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use kartik\builder\Form;
use yii\helpers\Html;

$model = new User();
/** @var ZView $this */
$this->formModel($model);

$form = $this->activeBegin();

$this->grape=true;

ZRowWidget::begin();
ZColWidget::begin([
    'config' => [
        'width' => 12
    ]
]);

echo ZFormBuildWidget::widget([
    'model' => $model,
    'names' => [
        'photo'
    ],

]);

ZColWidget::end();
ZRowWidget::end();
?>
