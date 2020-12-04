<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZICheckCheckboxListWidget;
use zetsoft\widgets\inputes\ZDynaCheckboxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\places\ZLeafletLocationWidget;
use zetsoft\widgets\places\ZLeafLocWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

Az::$app->forms->modelz->post(true);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'zicheckcheckboxwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZLeafLocWidget::class,
                ],

            ]
        ]


    ]
]);


$this->activeEnd();

