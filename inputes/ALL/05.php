<?php


use kartik\checkbox\CheckboxX;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\service\cores\Date;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\inputes\ZInputMaskWidgetNew;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZInputWidget3;
use zetsoft\widgets\inputes\ZjQueryCustomCaretWidget;
use zetsoft\widgets\inputes\ZJqueryEmojiareaJsWidget;
use zetsoft\widgets\inputes\ZJqueryTextareafullscreenWidget;
use zetsoft\widgets\inputes\ZJqueryTextareaLibraryWidget;
use zetsoft\widgets\inputes\ZKCheckboxXWidget;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;
use zetsoft\widgets\inputes\ZSelect2WidgetOLD;
use zetsoft\widgets\inputes\ZTextAreaWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$data  = Az::$app->forms->modelz->data();
$items = Az::$app->forms->modelz->data();
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
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryTextareafullscreenWidget::class,

                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKCheckboxXWidget::class,
                    'options' => [
                        'config'=>
                            [
                                'initinputype' => CheckboxX::INPUT_CHECKBOX,
                                'isAutoLabel' => true,
                                'pluginoption' => [
                                    'size' => 'sm',
                                    'iconChecked' => '<b>&check;</b>',
                                    'iconUnchecked' => '<b>X</b>',
                                ],
                                'hasIcon' => true,
                                'icon' => 'fas fa-'. FA::_USERS,
                                'lLabelsetting' => ['label' => 'Blue Small', 'options' => ['class' => 'text-info']]
                            ]
                    ]
                ],

            ]
        ],
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKColorInputWidget::class,
                    'options'=> []
                ],
            ]
        ],
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryTextareaLibraryWidget::class,

                ],
            ]
        ],
        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatecontrolWidget::class,
                    'options' => [
                        'name' => 'begin_time',

                        'config'=>[
                            'type'=> ZKDatecontrolWidget::format['date'],
                            'displayFormat'=> 'php:'.Date::date,
                            'saveFormat'=> 'php:'.Date::date,
                            'displayTimezone'=>'',
                            'saveTimezone'=>'',
                            'isAutoWidget'=> true,
                            'widgetOptions'=>'',
                            'disabled'=> false,
                            'readonly'=> false,
                            'saveOptions'=>'',
                            'isAjaxConversion'=> true,
                            'isAsyncRequest'=> true,
                        ]
                    ],

                ],
            ]
        ],
    ]
]);


$this->activeEnd();
