<?php


use
zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZCountryPickerWidgetOld;
use zetsoft\widgets\inptest\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'config' => [
        'buttonup_txt' => '<i class="fas fa-plus"></i>',
        'buttondown_txt' => '<i class="fas fa-minus"></i>',
        'buttonup_class' => 'btn btn-primary',
        'buttondown_class' => 'btn btn-primary',
    ],
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTouchSpinWidget::class,
                    'options'=>[
                        'data'=>$items
                    ]
                ],

            ]
        ],


    ]
]);

$this->activeEnd();

