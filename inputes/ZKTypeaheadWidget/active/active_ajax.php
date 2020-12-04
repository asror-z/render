<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;
use zetsoft\widgets\inputes\ZMultiJsWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZPrettyCheckboxWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use yii\helpers\Url;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$data  = Az::$app->forms->modelz->data();
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$data = [
    'Alabama', 'Alaska', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    'Idaho', 'Maine',  'New Jersey', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington',
];
/*$model->configs->rulesAll = [
    [
        validatorInteger
    ]
];*/
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZKTypeaheadWidget::class,
                    'options' => [
                        'config' => [
                            'minLength' => 1,
                            'local' => $data,
                            'limit' => 5,
                            'display' => 'value',
                            'remote' => [
                                'url' => Url::to(['depdropret/ajax3']) . '?q=%QUERY',
                                'wildcard' => '%QUERY'
                            ],
                        ]
                    ]
                ],
            ]
        ],



    ]
]);

$this->activeEnd();

