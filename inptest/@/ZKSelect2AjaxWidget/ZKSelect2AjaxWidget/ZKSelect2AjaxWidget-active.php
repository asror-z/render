<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZKSelect2AjaxWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'zkselect2widget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2AjaxWidget
                    ::class,
                    'options' => [
                        'config' => [
                            'addonPrependContent' => false,
                            'addonAppendContent' => false,
                            'isHideSearch' => false,
                            'isMaintainOrder' => false,
                            'contentBefore' => '',
                            'class' => 'kv-editable-input',
                            'contentAfter' => '',
                            'allowClear' => true,
                            'theme' => ZKSelect2AjaxWidget::theme['krajee-bs4'],
                            'size' => ZKSelect2AjaxWidget::size['lg'],
                            'hasIcon' => true,
                            'icon'=>'fas fa-user',
                        ],
                    ]


                ],
            ]
        ],
    ],
]);

$this->activeEnd();

