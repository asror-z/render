<?php


use unclead\multipleinput\MultipleInput;
use zetsoft\former\chat\AnswerForm;
use zetsoft\former\deps\DataForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\shop\SizeForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZMultipleInput;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZNewMultipleWidget;


$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$this->modelPost();


/*echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZNewMultipleWidget::class,
                    'options' => [
                        'formClass' => SizeForm::class,
                    ]
                ],

            ]
        ],


    ]
]);*/

echo ZNewMultipleWidget::widget();

$this->activeEnd();



