<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZCheckboxImageWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

 ?>

    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
<?php
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckboxImageWidget::class,
                    'options' => [
                        'config' => [
                            'image'=> 'checkable',
                        ],
                    ]
                ),

            ]
        ]


    ]
]);


$this->activeEnd();

