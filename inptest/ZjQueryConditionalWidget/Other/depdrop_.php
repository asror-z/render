<?php

use kartik\form\ActiveForm;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\widgets\inputes\ZKDepDropWidget;

$model = new PageAction();

$form = ActiveForm::begin();
echo $form->field($model, 'name')->widget(ZKDepDropWidget::class, [
    'config' => [
        'target' => PageModule::class,
        'options' => [
            'type' => 2
        ]
    ]
]);

echo $form->field($model, 'data')->widget(ZKDepDropWidget::class, [
    'config' => [
        'parent' => [
            PageModule::class
        ],
        'target' => PageControl::class,
        'depend' => 'name'
    ]
]);

echo $form->field($model, 'link')->widget(ZKDepDropWidget::class, [
    'config' => [
        'parent' => [
            PageControl::class,
            PageModule::class,
        ],
        'target' => PageAction::class,
        'depend' => 'data'
    ]
]);


ActiveForm::end();
