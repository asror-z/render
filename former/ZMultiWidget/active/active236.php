<?php

use kartik\builder\Form;
use yii\helpers\Url;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZFileInputWidget;

$model = $this->modelGet(CoreInput::class, 1);

/** @var ZView $this */
$items = Az::$app->forms->modelz->data();
?>

<div class="row">
    <div class="col-10">
    <?
        $form = $this->activeBegin();
        $this->modelSave($model);

        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'rows' => [
                [
                    'attributes' => [       // 2 column layout
                        'jsonb_4' => [
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZFileInputWidget::class,
                        ],

                    ]
                ],


            ]
        ]);

        $this->activeEnd();
    ?>
    </div>
</div>


