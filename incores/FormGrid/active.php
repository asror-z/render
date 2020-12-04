<?php


use kartik\builder\Form;
use kartik\builder\FormGrid;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\test\TestDilshod;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZDynaCheckboxWidget;

//$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
/** @var ZView $this */


$model = new PlaceAdress();

$items = Az::$app->forms->modelz->data();

$active = new Active();
$active->type = Active::type['vertical'];
//$active->labelSpan = 0;
$form = $this->activeBegin($active);
$this->modelSave($model);


echo FormGrid::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'exampleAttr1' => [
                    'columns' => 12,
                    'attributes' => [
                        'place_region_id' => [
                            'type' => Form::INPUT_TEXT,
                            'options' => ['placeholder' => 'Enter username...'],
                            'columnOptions' => ['colspan' => 4],
                        ],
                        'place_country_id' => [
                            'type' => Form::INPUT_PASSWORD,
                            'options' => ['placeholder' => 'Enter password...'],
                            'columnOptions' => ['colspan' => 3],
                        ],
                        'street' => [
                            'type' => Form::INPUT_PASSWORD,
                            'options' => ['placeholder' => 'Enter password...'],
                            'columnOptions' => ['colspan' => 2],
                        ],
                        'home' => [
                            'type' => Form::INPUT_PASSWORD,
                            'options' => ['placeholder' => 'Enter password...'],
                            'columnOptions' => ['colspan' => 2],
                        ],
                        'orientation' => [
                            'type' => Form::INPUT_PASSWORD,
                            'options' => ['placeholder' => 'Enter password...'],
                            'columnOptions' => ['colspan' => 1],
                        ],
                    ]
                ]
            ]
        ],
        [
            'contentBefore' => '<legend class="text-info"><small>Profile Info</small></legend>',
            'columns' => 6,
            'autoGenerateColumns' => false, // override columns setting
            'attributes' => [       // colspan example with nested attributes
                'exampleAttr2' => [
                    'label' => 'Address',
                    'labelOptions' => ['class' => 'is-required'], // displays the required asterisk
                    'columns' => 12,
                    'attributes' => [
                        'place_region_id' => [
                            'type' => Form::INPUT_TEXT,
                            'options' => ['placeholder' => 'Enter address...'],
                            'columnOptions' => ['colspan' => 6],
                        ],
                        'place_country_id' => [
                            'type' => Form::INPUT_TEXT,
                            'options' => ['placeholder' => 'Zip...'],
                            'columnOptions' => ['colspan' => 4],
                        ],
                        'street' => [
                            'type' => Form::INPUT_TEXT,
                            'options' => ['placeholder' => 'Phone...'],
                            'columnOptions' => ['colspan' => 2],
                        ],
                    ]
                ]
            ],
        ],
        [
            'contentBefore' => '<legend class="text-info"><small>2ta column</small></legend>',
            'attributes' => [       // 2 column layout
                'location' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
                'place' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
            ]
        ],
    ],
]);


$this->activeEnd();

