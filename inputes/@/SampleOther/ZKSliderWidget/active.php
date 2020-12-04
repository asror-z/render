<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZKSliderWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zselectcountrieswidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderWidget::class,
                    'options' => [
                        'config'=>[
                            'orientation' => ZKSliderWidget::orientation['horizontal'],
                            'selection' => ZKSliderWidget::selection['none'],
                            'tooltip' => ZKSliderWidget::tooltip['show'],
                            'sliderColor' => ZKSliderWidget::type['primary'],
                            'handleColor' => ZKSliderWidget::type['warning'],
                            'value' => '7',
                            'id' => '',
                            'min' => 0,
                            'max' => 10,
                            'step' => 1,
                            'precision' => 0
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();
