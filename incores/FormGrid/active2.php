<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZGrapesCheckboxWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */
$this->type = WebItem::type['ajax'];
$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZGrapesCheckboxWidget::class,
                    'options' => [
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

