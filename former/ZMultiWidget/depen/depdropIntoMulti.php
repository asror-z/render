

<?php


use zetsoft\former\chat\AnswerForm;
use zetsoft\former\deps\DataForm;
use zetsoft\former\deps\DepDropForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\card\ModelCardForm;
use zetsoft\former\eyuf\NeedForm;
use zetsoft\former\eyuf\ProductTest;
use zetsoft\former\shop\SizeForm;
use zetsoft\former\ALL\test\Test23Form;
use zetsoft\models\core\CoreInput;
use zetsoft\models\App\eyuf\DepdropFilter;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\former\ZMultiWidgetNorm;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\former\ZMultiWidget;


$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidget::class,
                    'options' => [
                        'config' => [
                            'formClass' => ModelCardForm::class,
                        ]
                    ]
                ],

            ]
        ],


    ]
]);

$this->activeEnd();



