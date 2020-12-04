<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use kartik\date\DatePicker;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$model->configs->rules = [
    [
        'zetsoft\\system\\validate\\ZRequiredValidator'
    ]
];
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatepickerWidget::class,
                    'options' => [
                        'value' => '23-Feb-1982',
                        'config'=>[
                            'title' => '',
                            'name2' => '',
                            'value' => '',
                            'value2' => false,
                            'type'=>  DatePicker::TYPE_COMPONENT_PREPEND,
                            'size' => ZKDatepickerWidget::size["sm"],
                            'pickerIcon' => 'fas fa-calendar-alt',
                            'pickerButton' => [],
                            'removeIcon' => 'fas fa-minus',
                            'removeButton' => '',
                            'layout' => false,
                            'attribute2' => false,
                            'options2' => false,
                            'separator' => 'to',
                            'isAssumeNearbyYear' => false,
                            'isCalendarWeeks' => false,
                            'datesDisabled' => [],
                            'daysOfWeekHighlighted' => [],
                            'defaulttViewDate' => '',
                            'startDate' => '0',
                            'endDate' => '',
                            'maxViewMode' => 0,
                            'minViewMode' => 0,
                            'isMultidate' => false,
                            'startView' => 0,
                            'zIndexOffset' => 10,
                            'daysOfWeekDisabled' => [],
                            'placeholderDate' => '',
                            'disabled' => false,
                            'readonly' => false,
                        ]
                    ],
                ],
            ]
        ],
    ],
]);
$this->activeEnd();





