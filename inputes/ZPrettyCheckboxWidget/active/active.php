<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZPrettyCheckboxWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHRadioWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
?>
<div class="container">
    <?php
    echo ZFormWidget::widget([
        'model' => $model,
        'form' => $form,
        'rows' => [
            [
                'attributes' => [
                    'string_4' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZPrettyCheckboxWidget::class,
                        'options' => [
                            'config' => [
                                'hasIcon' => false,
                                'label' => 'Very Pretty Checkbox',
                            ]
                        ]
                    ],
                ]
            ]
        ]
    ]);

    $this->activeEnd();
    ?>
</div>
