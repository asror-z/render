<?php


use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZMultipleInputNewWidget;
use zetsoft\widgets\former\ZMultiWidget;

$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'zmultiwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultipleInputNewWidget::class,
                    'options' => [
                        'config' => [
                            'form' => TestLaptopForm::class,
                        ]
                    ]
                ),

            ]
        ],


    ]
]);

$this->activeEnd();



