<?php


use kartik\builder\Form;
use zetsoft\former\chat\AnswerForm;
use zetsoft\former\deps\DataForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZMultiFormWidget2;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZMultiWidget;


$model = $this->modelGet(CoreInput::class, 1);
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
                'zmultiwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiFormWidget2::class,
                    'options' => [
                        //'active' => LaptopForm::class,
                        'formClass' => AnswerForm::class,
                        'data' => $items
                    ]
                ],

            ]
        ],


    ]
]);
