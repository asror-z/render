<?php


use rmrevin\yii\fontawesome\FA;
use yii\validators\NumberValidator;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inptest\ZKNumberWidget_Ref;
use zetsoft\widgets\inputes\ZKSelect2Widget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


$model->configs->rulesAll = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'int_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKNumberWidget_Ref::class,
                     'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS
                        ]
                     ]
                ],
            ]
        ],

    ]
]);

$this->activeEnd();

