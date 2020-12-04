<?php

namespace zetsoft\models\core\CoreInput;


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZLeafletOldWidget;
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

$this->modelSave($model);


ZRowWidget::begin();
ZColWidget::begin([
    'width' => 9
]);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'ZLeafletWidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZLeafletOldWidget::class,
                    'options' => [
                    
                    ]
                ],
            ]
        ],


    ]
]);


ZColWidget::end();
ZRowWidget::end();



$this->activeEnd();

