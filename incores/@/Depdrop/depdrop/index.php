<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
/*
* SCENARIO 1: A 3-level nested dependency example
*/
// THE VIEW
use kartik\depdrop\DepDrop;

$catList = [
    1 => 'Electronics',
    2 => 'Books',
    3 => 'Home & Kitchen'
];

// Parent
echo $form->field($group, 'cat')->dropDownList($catList, ['id'=>'cat-id']);

// Child # 1
echo $form->field($group, 'subcat')->widget(DepDrop::classname(), [
    'options'=>['id'=>'subcat-id'],
    'pluginOptions'=>[
        'depends'=>['cat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/site/subcat'])
    ]
]);

// Child # 2
echo $form->field($group, 'prod')->widget(DepDrop::classname(), [
    'pluginOptions'=>[
        'depends'=>['cat-id', 'subcat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/site/prod'])
    ]
]);

// THE CONTROLLER
