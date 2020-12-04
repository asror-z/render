<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

/*use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;*/

use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\market\ZStarDobtcoWidget;
use zetsoft\widgets\market\ZStarDobtcoWidget2;
use zetsoft\widgets\market\ZStarDobtcoWidgetM;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();

if (!isset($items)) {
    $items = [1 => 'Item1',
        2 => 'Item2',
        3 => 'Item3',
        4 => 'Item4',
        5 => 'Item5',
        6 => 'Item6'];
}

$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZStarDobtcoWidgetM::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasPlace' => true,
                        ]
                    ]
                ],

            ],

        ],


    ]
]);

$this->activeEnd();

