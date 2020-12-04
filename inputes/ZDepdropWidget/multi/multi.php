<?php


use zetsoft\former\chat\ChatAnswerForm;
use zetsoft\former\deps\DepsDataForm;
use zetsoft\former\deps\DepsDropForm;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\former\card\ModelCardForm;
use zetsoft\former\deps\DepsdropIdeal;
use zetsoft\former\eyuf\EyufNeedForm;
use zetsoft\former\eyuf\ProductTest;
use zetsoft\former\shop\shopSizeForm;
use zetsoft\former\ALL\test\Test23Form;
use zetsoft\models\drag\DragConfigDb;
use zetsoft\models\core\CoreInput;
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


$id = $this->httpPost('modelId');

$model = new DragConfigDb();
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
                'card' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidget::class,
                    'options' => [
                        'config' => [
                            'formClass' => DepsDropForm::class,
                        ]
                    ]
                ],

            ]
        ],


    ]
]);

//  vdd();
$this->activeEnd();



