<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use yii\helpers\Html;
use kartik\builder\Form;
echo Html::beginForm('', '', ['class'=>'form-horizontal']);
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller
    // using $_POST['kvform']
    'formName'=>'kvform',

    // default grid columns
    'columns'=>2,

    // set global attribute defaults
    'attributeDefaults'=>[
        'type'=>Form::INPUT_TEXT,
        'labelOptions'=>['class'=>'col-md-3'],
        'inputContainer'=>['class'=>'col-md-9'],
        'container'=>['class'=>'form-group'],
    ],

    'attributes'=>[
        'fld1'=>['label'=>'Name', 'value'=>'Kartik'],
        'fld2'=>['label'=>'Email', 'value'=>'info@solutions.com'],
        'fld3'=>['label'=>'From Date', 'type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\DatePicker'],
        'fld4'=>['label'=>'To Date', 'type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\DatePicker'],
        'fld5'=>['label'=>'Details', 'type'=>Form::INPUT_TEXTAREA],
        'fld6'=>['label'=>'Remarks', 'type'=>Form::INPUT_TEXTAREA],
        'fld7'=>[
            'label'=>'Severity',
            'items'=>[0=>'Low', 1=>'Medium', 2=>'High'],
            'type'=>Form::INPUT_RADIO_BUTTON_GROUP
        ],
        'fld8'=>[
            'label'=>'Categories',
            'items'=>[0=>'Group 1', 1=>'Group 2', 2=>'Group 3'],
            'type'=>Form::INPUT_CHECKBOX_BUTTON_GROUP
        ],
    ]
]);
echo Html::endForm();
