<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\images\ZNanoGaleryWidget;
use zetsoft\widgets\inputes\ZICheckMaterialWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


?>
    <div class="col-md-2">
        <?
        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'rows' => [
                [
                    'attributes' => [       // 2 column layout
                        'string_1' => array(
                            'type' => Form::INPUT_WIDGET,
                            'widgetClass' => ZNanoGaleryWidget::class,
                        ),

                    ]
                ]


            ]
        ]);


        ?>
    </div>
<?

$this->activeEnd();

