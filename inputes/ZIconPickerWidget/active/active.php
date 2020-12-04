<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\dbitem\core\WebItem;


$model = $this->modelGet(CoreInput::class, 7);
$items = $this->modelData();
$form = $this->activeBegin();
$this->modelPost();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZIconPickerWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZIconPickerWidget::type['buttonIconPicker'],
                        ]
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

