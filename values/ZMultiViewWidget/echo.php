<?php


use kartik\builder\Form;
use zetsoft\former\test\LaptopFormTest;
use zetsoft\former\eyuf\HigherEducationForm;
use zetsoft\models\core\CoreInput;
use zetsoft\models\core\CoreSetting;
use zetsoft\models\App\eyuf\EyufCompatriot;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\values\ZMultiViewWidget;

$model = $this->modelGet(EyufCompatriot::class, 6);
/** @var ZView $this */


$form = $this->activeBegin();
$this->modelSave($model);

echo ZMultiViewWidget::widget([
    'model' => $model,
    'attribute' => 'higher_education',
    'formClass' => HigherEducationForm::class,
]);

echo ZMultiViewWidget::widget([
    'model' => $model,
    'attribute' => 'higher_education',
    'formModel' => CoreSetting::findOne(23),
    'formAttr' => 'name',
]);


$this->activeEnd();

