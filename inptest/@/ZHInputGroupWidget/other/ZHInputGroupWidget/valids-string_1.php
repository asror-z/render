<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZHInputGroupWidget;
use zetsoft\widgets\inptest\ZHPasswordInputWidget;
use zetsoft\widgets\inptest\ZRadioButtonGroup;
use zetsoft\widgets\inptest\ZKSelect2Widget;

/*
 * http://eyuf.zettest.uz/core/tester/asror/main.aspx?path=render\inptest\ZHInputGroupWidget\ZHInputGroupWidget-string_1
 *
 */

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorString],
    [validatorRequired]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputGroupWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ],

        ],


    ]
]);

$this->activeEnd();

