<?php

use zetsoft\dbitem\App\eyuf\CheckboxItem;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxGroupWidgetM;
use zetsoft\widgets\inputes\ZBootstrapItemCheckboxGroupWidgetM;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

//ITEM1
$checkboxItems = [];
$checkboxItem = new CheckboxItem();
$checkboxItem->icon = '<img width="60" height="auto" src="https://c7.hotpng.com/preview/678/81/177/mastercard-money-foothills-florist-business-visa-visa-mastercard.jpg" alt="sum">';
$checkboxItem->title = '';
$checkboxItem->text = 'Visa,MasterCard';
$checkboxItems [] = $checkboxItem;

//ITEM2
$checkboxItem = new CheckboxItem();
$checkboxItem->icon = '<img width="60" height="auto" src="https://www.norma.uz/img/3a/fe/b41dfe1a1e097ca094dd632f32fa.png" alt="sfasf">';
$checkboxItem->title = '';
$checkboxItem->text = 'UzCard tooltip';
$checkboxItems [] = $checkboxItem;

//ITEM3
$checkboxItem = new CheckboxItem();
$checkboxItem->icon = '<img width="60" height="auto" src="https://nuz.uz/uploads/posts/2019-04/thumbs/1555519524_9832b1e7d050fdec979807eaa4da.jpg" alt="sfasf">';
$checkboxItem->title = '';
$checkboxItem->text = 'Humo tooltip';
$checkboxItems [] = $checkboxItem;

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapItemCheckboxGroupWidgetM::class,
                    'options' => [
                        'data' => $checkboxItems,
                        'config' => [
                        ]
                    ]
                ],
            ]
        ]
    ]
]);


$this->activeEnd();
