<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZjQueryCustomCaretWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKDepDropWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSelect2WidgetNew;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);
/*$model->configs->rulesAll = [
    [
        validatorInteger
    ]
];*/

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [

                    ]
                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options'=>[
                        'data'=>$items
                    ]
                ],

            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKStarRatingWidget::class,
                    'options'=>[
                        'value' => 0,

                    ]
                ],

            ]
        ],
        [
             'attributes' => [       // 2 column layout
                 'bool_1' => [
                     'type' => Form::INPUT_WIDGET,
                     'widgetClass' => ZKSwitchInputWidget::class,
                     'options' => [
                         'config'=>[
                             'hasIcon'=>false,
                             'icon' => 'fas fa-'. FA::_USERS,
                         ]
                     ],
                 ]
             ]
         ],
        [
            'attributes' => [       // 2 column layout
                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTimePickerWidget::class,
                    'options'=>[
                        'data'=>$items
                    ]
                ],

            ]
        ],



    ]
]);

$this->activeEnd();

