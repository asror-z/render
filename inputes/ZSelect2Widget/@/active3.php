<?php


use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\incores\ZDepDropWidget;
use zetsoft\widgets\inputes\ZSelect2Widget2;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 3);
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
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZSelect2Widget3::class,
                    'options' => [
                        'data' => [
                            'mt' => 'mt',
                            'mt-2' => 'mt-2',
                            'mt-3' => 'mt-3',
                            'btn-lg' => 'btn-lg',
                            'btn-sm' => 'btn-sm',
                            'btn-primary' => 'btn-primary',
                            'btn-success' => 'btn-success',
                            'btn-danger' => 'btn-danger',
                            'btn-warning' => 'btn-warning',
                            'btn-info' => 'btn-info',
                            'btn-dark' => 'btn-dark',
                        ],
                        'config' => [
                            'enableEvent' => true,
                            'multiple' => true,
                            'placeholder' => '123',
                        ],
                    ]
                ],
                
            ]
        ],
    ],
]);


//obichniy
<select id="w4" class="select selectM select2-hidden-accessible" multiple="" name="sadsda[]" data-placeholder="123"
        data-allow-clear="1" data-select2-id="w4" tabindex="-1" aria-hidden="true">
    <option value="mt">mt</option>
    <option value="mt-2">mt-2</option>
    <option value="mt-3">mt-3</option>
    <option value="btn-lg">btn-lg</option>
    <option value="btn-sm">btn-sm</option>
    <option value="btn-primary">btn-primary</option>
    <option value="btn-success">btn-success</option>
    <option value="btn-danger">btn-danger</option>
    <option value="btn-warning">btn-warning</option>
    <option value="btn-info">btn-info</option>
    <option value="btn-dark">btn-dark</option>
</select>
