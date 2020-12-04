<?php
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\inputes\ZSelect2Widget2;

$model = $this->modelGet(CoreInput::class, 3);
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
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget2::class,
                    'options' => [
                        'config' => [
                            'enableEvent' => true,
                            'multiple' => false,
                            'placeholder' => '123',
                            'imagePath' => false,
                        ],
                        'data' =>[
                            'uz' => 'Uzbekistan',
                            'ad' => 'Andora',
                            'ae' => 'United Arab Emirates',
                            'af' => 'Afganistan',
                            'ag' => 'Antigua and Barbuda',
                            'ai' => 'Anguilla',
                            'al' => 'Albania',
                            'am' => 'Armenia',
                            'ao' => 'Amgola',
                            'aq' => 'Antarctica',
                            'ar' => 'Argentina',
                            'as' => 'American Samoa',
                            'at' => 'Austria',
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
