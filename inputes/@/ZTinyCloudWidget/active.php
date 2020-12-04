<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZTinyCloudWidget;

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
                'text_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTinyCloudWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => '',
                            'hasIcon' => true,
                            'icon' => 'fas fa-user'

                        ],
                    ],
                ],
            ]
        ],
    ],
]);

$this->activeEnd();

/*$model = CoreInput::find()
    ->where([
        'id' => 7
    ])
    ->select('jsonb_4')
    ->one();
    $as = json_decode($model, true);
vdd($as);*/

    
