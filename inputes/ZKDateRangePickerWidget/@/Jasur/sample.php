<?php

use kartik\daterange\DateRangePicker;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget2;

echo DateRangePicker::widget([
    'name'=>'date_range_2',
    'presetDropdown'=>true, 
    'convertFormat'=>true,
    'pluginOptions' => [
        'timePicker'=>true,
        'timePickerIncrement'=>30,
        'locale'=>[
            'format'=>'Y-m-d h:i A',
            'separator' => ' - ',
        ]
    ],
    'options' => ['placeholder' => 'Select range...'],
    'hideInput' => true,
    'convertFormat' => true,
    'useWithAddon' => true,
    'autoUpdateOnInit'=> false,
    'useWithAddon' => false,
    'initRangeExpr' => false,
    'presetDropdown' => true,
    'convertFormat' => true,
    'containerOptions' => [
        'class' => 'green'
    ],
    'options' => [
        'class' => 'blue'
    ],
    'attribute'=>'datetime_range',
  /*  'pluginEvents' => [
        "show.daterangepicker" => 'function() { log("show.daterangepicker"); }',
        "hide.daterangepicker" => 'function() { log("hide.daterangepicker"); }',
        "apply.daterangepicker" => 'function() { log("apply.daterangepicker"); }',
        "cancel.daterangepicker" => 'function() { log("cancel.daterangepicker"); }',
],*/
    'initRangeExpr' => true,
]);
