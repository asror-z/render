<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZSelectable2Widget;

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
                    'widgetClass' => ZSelectable2Widget::class,
                    'options' => [
                        'config' => [
                            'items' => [
                                'acadcac',
                                'acadcac',
                            ]
                        ]
                    ]
                ),
            ]
        ]
    ]
]);

$this->activeEnd();

