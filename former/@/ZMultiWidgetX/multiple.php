<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\ALL\Test;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\navigat\ZButtonWidget;


/** @var ZView $this */


$model = $this->modelGet(Test::class, 1);

$form = $this->activeBegin();
$this->modelSave($model);


$this->title = "Вход в систему ZAllApps";
/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'submitBtn' => true,
        'isCnt' => false,
        'name' => Az::l('TwoBlock'),
        'type' => ZFormWidget::type['all'],
    ]

]);*/

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'readonly' => true
    ],
    'rows' => [
        [
            'attributes' => [
                'name' => [],
                'title' => [
                    'type' => Form::INPUT_DROPDOWN_LIST,
                    'enableError' => true,
                    'title' => 'Color',
                    'defaultValue' => 1,
                    'items' => [
                        '1' => 'White',
                        '2' => 'Black',
                        '3' => 'Green',
                    ],
                ],
            ]

        ],
        [
            'attributes' => [
                'computer_id' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidget::class,
                    'options' => [
                        'config' => [
                            'form' => TestLaptopForm::class
                        ]
                    ]
                ],
            ]
        ]
    ]
]);


//echo ZFormWidget::widget([
//    'model' => $model,
//    'form' => $form,
//    'config' => [
//        'submitBtn' => true,
//        'isCnt' => false,
//        'type' => ZFormWidget::type['all'],
//    ],
/*    'names' => [
        'name',
        'title',
    ],*/
//]);

echo ZButtonWidget::widget([
     'config' => [
         'name' => 'Log In',
     ]
]);


$form = $this->activeEnd();
