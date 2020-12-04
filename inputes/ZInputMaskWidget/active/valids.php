<?php   
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZICheckCheckboxListWidget;
use zetsoft\widgets\inputes\ZDynaCheckboxWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//$this->modelPost();

$model->configs->rules = [
    ['zetsoft\\system\\validate\\ZRequiredValidator'],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputMaskWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS
                        ]
                    ]
                ],

            ]
        ],

    ]
]);


$this->activeEnd();

