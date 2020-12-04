<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\form\ActiveForm;
use kartik\builder\TabularForm;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use zetsoft\models\user\User;
use zetsoft\system\helpers\ZHTML;



$model = new User();
$attribute = [
    'id' => [ // primary key attribute
        'type' => TabularForm::INPUT_HIDDEN,
        'columnOptions' => ['hidden' => true]
    ],
    'name' => ['type' => TabularForm::INPUT_TEXT],
    'lastseen' => [
        'type' => function ($model, $key, $index, $widget) {
            return ($key % 2 === 0) ? TabularForm::INPUT_HIDDEN : TabularForm::INPUT_WIDGET;
        },
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => function ($model, $key, $index, $widget) {
            return ($key % 2 === 0) ? [] :
                [
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true,
                        'autoclose' => true
                    ]
                ];
        },
        'columnOptions' => ['width' => '170px']
    ],
    /*'color' => [
        'type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\color\ColorInput::classname(),
        'options' => [
            'showDefaultPalette' => false,
            'pluginOptions' => [
                'preferredFormat' => 'name',
                'palette' => [
                    [
                        "white", "black", "grey", "silver", "gold", "brown",
                    ],
                    [
                        "red", "orange", "yellow", "indigo", "maroon", "pink"
                    ],
                    [
                        "blue", "green", "violet", "cyan", "magenta", "purple",
                    ],
                ]
            ]
        ],
        'columnOptions' => ['width' => '150px'],
    ],*/

    /*'author_id' => [
        'type' => TabularForm::INPUT_DROPDOWN_LIST,
        'items' => ArrayHelper::map(User::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
        'columnOptions' => ['width' => '185px']
    ],*/

    'user_company_id' => [
        'type' => TabularForm::INPUT_TEXT,
        'label ' => 'Buy',
        'options ' => ['class' => 'form-control text-right'],
        'columnOptions' => ['hAlign' => GridView::ALIGN_RIGHT, 'width' => '90px']
    ],

    /*'sell_amount' => [
        'type' => TabularForm::INPUT_STATIC,
        'label' => 'Sell',
        'columnOptions' => ['hAlign' => GridView::ALIGN_RIGHT, 'width' => '90px']
    ],*/
];


$form = ActiveForm::begin();
echo TabularForm::widget([
    'dataProvider' => $model->search(),
    'form' => $form,
    'rowHighlight' => true,
    'checkboxColumn' => [
        'class' => '\kartik\grid\CheckboxColumn',
        'contentOptions' => ['class' => 'kv-row-select'],
        'headerOptions' => ['class' => 'kv-all-select'],
    ],
    'actionColumn' => [
        'class' => '\kartik\grid\ActionColumn',
        'updateOptions' => ['style' => 'display:block;'],
        'width' => '60px'
    ],
    'attributes' => $attribute,
    'gridSettings' => ['condensed' => true],


]);

// Add other fields if needed or render your submit button
echo '<div class="text-right">' .
    ZHTML::submitButton('Submit', ['class' => 'btn btn-primary']) .
    '<div>';
ActiveForm::end();


