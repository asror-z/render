<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use zetsoft\models\page\PageControl;
use zetsoft\models\shop\ShopProduct;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZEditKartikWidget;
use kartik\editable\Editable;
use zetsoft\widgets\former\ZListViewWidgetOld;
use zetsoft\widgets\inptest\ZCheckboxWidget;

$model = new ShopProduct();
echo '<label>Person Name</label><br>';
$model = $this->modelGet(\zetsoft\models\place\PlaceRegion::class, 2);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();
?>

<?php
    /*
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'name' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => Editable::class,
                    'options' => [


                    ],
                ],
            ]
        ],
    ]
]);
        */
echo Editable::widget([
    'model'=>$model,
    'attribute' => 'name',
    'inputType' => Editable::INPUT_TEXT,
    'size' => 'md',
    'data' =>$model->search(),
    'format' => 'button',
    'editableValueOptions'=>['class'=>'card p-3']
]);

$this->activeEnd();
