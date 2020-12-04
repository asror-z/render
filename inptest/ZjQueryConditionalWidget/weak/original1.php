<?php


use kartik\builder\Form;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\kernels\ZView;
use yii\data\ActiveDataProvider;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKDepDropWidget;


$model = $this->modelGet(PageModule::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

/** @var ActiveDataProvider $provider */
echo ZFormWidget::widget([
    // 'columns' => $columns,
    //
    'form' => $form,
    'model' => $model,

    'rows' => [
        [
            'attributes' => [
                'name' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,
                    'options'=> [
                        'config' => [
                            'target' => PageModule::class
                        ]
                    ],
                ],
                'data' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,
                    'options' => [
                        'config' => [
                            'target' => PageControl::class,
                            'parent' => 'core_module',
                            'depend' => 'name'
                        ]
                    ]
                ],

                'check' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDepDropWidget::class,
                    'options' => [
                        'config' => [
                            'target' => PageAction::class,
                            'parent' => 'core_control',
                            'depend' => 'data',
                        ]
                    ]
                ],
            ]
        ]
    ]
]);










