<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */
use zetsoft\widgets\display\ZChartWidget;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZTextareaWidget;


echo EOL .EOL;

echo 'ZChartWidget' .EOL;
echo ZChartWidget::widget([
]);


echo EOL .EOL;

echo 'ZFormWidget' .EOL;
$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTextareaWidget::class,
                    'options' => [
                        'config' => [
                            'rows' => 6,
                            'label' => 'My Label'
                        ]
                    ]
                ),
            ]
        ]
    ]
]);

$this->activeEnd();
