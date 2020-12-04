<?php

use zetsoft\former\deps\DataForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\former\ZMultiWidget;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZMultipleInputNewWidget;

$this->title = 'ZMultiWidget';
$action->icon = 'fa fa-industry';
$action->icon =true;
$this->csrf = true;
//$action->type = WebItem::type['html'];

$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [// 2 column layout
                'jsonb_2' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidget::class,
                    'options' => [
                        //'active' => LaptopForm::class,
                        'config' => [
                            'formClass' => DataForm::class,
                        ],
                        'data' => $items
                    ]
                ),

            ]
        ],


    ]
]);

$this->activeEnd();



