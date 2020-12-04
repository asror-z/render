<?php


use zetsoft\models\core\CoreInput;
use zetsoft\service\cores\Langs;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKColorInputWidget;

/*http://eyuf.zettest.uz/render/Inptest/ZKColorInputWidget/clean.html*/

$model = $this->modelGet(CoreInput::class, 6);
$model1 = $this->modelGet(CoreInput::class, 7);

/*Refactored Bunyod yoqubjonov*/
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//$data = array_flip(["Orange"=>1, "Apple"=>2, "Banana"=>3, "Cherry"=>4]);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKColorInputWidget::class,
                    'options'=> [

                    ]
                ],
            ]
        ],
    ]
]);



$this->activeEnd();

