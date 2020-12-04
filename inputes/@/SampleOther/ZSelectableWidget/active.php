<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelectable2Widget;
use zetsoft\widgets\inputes\ZHSelectableWidget_OLD;
use zetsoft\widgets\inputes\ZTextareaWidget;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHSelectableWidget_OLD::class,
                    'options' => [
                        'config' => [
                            'items' => [
                                'Item 1',
                                'Item 2',
                                'Item 3',

                            ]
                        ]
                    ]
                ),
            ]
        ]
    ]
]);

$this->activeEnd();

