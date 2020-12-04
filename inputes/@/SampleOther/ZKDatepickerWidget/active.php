<?php


use kartik\date\DatePicker;
use zetsoft\models\core\CoreInput;
use zetsoft\service\cores\Langs;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = Az::$app->forms->procs->model(CoreInput::class, 1);


/** @var ZView $this */

$items = Az::$app->forms->procs->sample();
$form = Az::$app->forms->active->begin();
Az::$app->forms->procs->save($model);


//$data = array_flip(["Orange"=>1, "Apple"=>2, "Banana"=>3, "Cherry"=>4]);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatepickerWidget::class,
                    'options'=> [
                        'config' => [
                        'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                            'value' => '23-Feb-1982',
                            'pluginOptions' => [
                                'autoclose'=>true,
                                'format' => 'dd-M-yyyy'
                            ]
                        ]
                    ]
                ],
            ]
        ],
    ]
]);

Az::$app->forms->active->end();

