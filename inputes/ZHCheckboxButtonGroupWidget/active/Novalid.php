<?php


use kartik\builder\FormGrid;
use zetsoft\models\Computer;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

 $model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorEmail]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [                        
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxButtonGroupWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => false,
                            'icon'=>'fas fa-user'
                        ]
                    ]
                ],
            ]
        ],


    ]
]);

$this->activeEnd();

