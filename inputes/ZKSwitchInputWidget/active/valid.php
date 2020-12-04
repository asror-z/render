<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;

/** @var CoreInput $model */
$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$data = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorBoolean]
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [

                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSwitchInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-' . FA::_USERS,
                        ]
                    ]
                ],
            ]
        ]


    ]
]);


$this->activeEnd();

