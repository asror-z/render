<?php

use zetsoft\widgets\inputes\ZDropDownListWidget;

$data = [
  '1' => '1',
  '2' => '2',
  '3' => '3',
  '4' => '4',
];

echo ZDropDownListWidget::widget([
    'data' => $data,
    'config'=> [

    'class'=>'form-control d-block',
    ],
]);
