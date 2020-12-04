<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */
$model->configs->rulesAll=[
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_2' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckRadioListWidget::class,
                     'options' => [
                            'config' => [
                                'hasIcon' => true,
                                'icon' => 'fas fa-'. FA::_USERS
                            ]
                     ],
                ),

            ]
        ]


    ]
]);


$this->activeEnd();

