<?php


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHRadioWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 2);
/** @var ZView $this */

$data = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$this->modelPost();
//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHRadioButtonGroupWidget::class,
                    'options' => [
                        'data' => $data,
                        'active' => [
                            'change' => true,
                        ],
                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-user',
                        ],
                        'event' => [
                            'change' => <<<JS
                    function () {
                        alert(this.value)
                    }
                           
JS,
                        ]
                    ]
                ],

            ]
        ]
    ]
]);

$this->activeEnd();

