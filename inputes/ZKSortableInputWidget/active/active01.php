<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKSortableInputWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options'=>[
                        'data' => $data =[
                            'Item1' => 'Item1',
                            'Item2' => 'Item2',
                            'Item3' => 'Item3',
                            'Item4' => 'Item4',
                            'Item5' => 'Item5',
                            'Item6' => 'Item6'
                            ],
                         'config' => [
                             'name'=>'kv-conn-1',
                             'bConnected' => true,
                             'bhideInput' => false,
                             'iMaxItems' => 12,
                             'readonly' => true
                        ]
                    ]
                ],
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options'=>[
                        'data' => $data =[
                            'Item11' => 'Item11',
                            'Item12' => 'Item12',
                            'Item13' => 'Item13',
                            'Item14' => 'Item14',
                            'Item15' => 'Item15',
                            'Item16' => 'Item16',
                        ],
                         'config' => [
                             'name'=>'kv-conn-2',
                             'bConnected' => true,
                             'bhideInput' => false,
                             'iMaxItems' => 12,
                             'readonly' => true
                        ]
                    ]
                ],
            ],
        ],
    ]
]);

$this->activeEnd();

