<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
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
                'attributes' => [       // 2 column layout
                    'string_1' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZInputMaskWidget::class,
                        'options' => [
                            'config' => [
                                'hasIcon' => true,
                                'icon' => 'fas fa-' . FA::_USERS
                            ]
                        ]
                    ],

                ]
            ],
            [
                'attributes' => [
                    'string_3' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZInputUniverseWidget::class,
                        'options' => [
                            'config' => [
                                'hasIcon' => true,
                            ],
                        ]
                    ],

                ]
            ],
            [
                'attributes' => [
                    'string_2' => [
                        'widgetClass' => ZInputWidget::class,
                        'type' => Form::INPUT_WIDGET,
                        'options' => [
                            'config' => [
                                'hasIcon' => true,
                                'placeholder' => 'Value',
                                'changeSubmit' => true,
                                'type' => ZInputWidget::type['time'],
                            ]
                        ]
                    ],
                ]
            ],
            [
                'attributes' => [
                    'string_8' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZjQueryCustomCaretWidget::class,
                        'options' => [
                        ]
                    ],

                ]
            ],
            [
                'attributes' => [
                    'string_5' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZJqueryEmojiareaJsWidget::class,
                        'options' => [
                        ]
                    ],

                ]
            ],
        ]
    ]);


$this->activeEnd();

