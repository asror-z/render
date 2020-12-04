<?php


use kartik\widgets\Select2;
use yii\widgets\ActiveForm;
use zetsoft\models\Computer;
use zetsoft\models\vade\Country;
use zetsoft\widgets\former\ZAjaxActiveForm;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZMultipleInput2Widget;
use zetsoft\widgets\inputes\ZMultiWidget;
use unclead\multipleinput\MultipleInput;

$model = new \zetsoft\models\libra\Computer();

$form = ActiveForm::begin();

echo $form->field($model, 'ZMultiWidgetNew')->widget(ZMultipleInput::class, [
        'max' => 6,
        'min' => 2, // should be at least 2 rows
        'allowEmptyList' => false,
        'enableGuessTitle' => true,
        'columns' => [
            [
                'name' => 'user_id',
                'type' => Select2::class,
                'enableError' => true,
                'title' => 'Title',
                'defaultValue' => 33,
                'items' => [
                    31 => 'item 31',
                    32 => 'item 32',
                    33 => 'item 33',
                    34 => 'item 34',
                    35 => 'item 35',
                    36 => 'item 36',
                ],
                'options' => [
                    'name' => 'user_id',
                    'value' => '',
                    'data' => [
                        31 => 'item 31',
                        32 => 'item 32',
                        33 => 'item 33',
                        34 => 'item 34',
                        35 => 'item 35',
                        36 => 'item 36',
                    ],
                    'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
                ]

            ],

            [
                'name' => 'user_id',
                'type' => 'dropDownList',
                'title' => 'dropDownList',
                'defaultValue' => 1,
                'items' => [
                    1 => 'User 1',
                    2 => 'User 2',
                    3 => 'User 3',
                    4 => 'User 4',
                    5 => 'User 5',
                ]
            ],
        ],
        'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
]);
ActiveForm::end();

