<?php
use kartik\builder\Form;

use zetsoft\system\kernels\ZView;

use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZSelectCountriesWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 14);
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
                'zselectcountrieswidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectCountriesWidget::class,
                    'options'=>[
                        'config' => [
                            'placeholder'=>'',
                            'hasIcon' => true,
                            'icon'=>'fas fa-check'

                        ]
                    ],


                ],
            ]
        ],
    ],
]);

$this->activeEnd();

