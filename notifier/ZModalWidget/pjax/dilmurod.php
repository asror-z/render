<?php


use rmrevin\yii\fontawesome\FA;
use yii\widgets\Pjax;
use zetsoft\models\core\CoreInput;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZTextareaWidget;
use zetsoft\widgets\market\ZInputNumberWidget;
use zetsoft\widgets\notifier\ZIziModalWidget;
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetJavohir;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;


/** @var ZView $this */



?>


<?php

/** @var ZView $this */





$this->pjaxBegin();
$model = $this->modelGet(CoreInput::class, 10);
$items = Az::$app->forms->modelz->data();

//$pjaxId = Az::$app->forms->zPjax->begin()->id;


$this->modelSave($model);


if ($this->formModel($model)) {

}



echo date('H:i:s');
$post = $this->httpPost('CoreInput');
vd(ZArrayHelper::getValue($post, 'string_1'));

ZIziModalWidget::begin(  
       

);


//vdd(Az::$app->forms->zPjax->begin()->id);

$form = $this->activeBegin(
);

?>

  <div class="p-3">
<?php
echo ZFormWidget::widget([
    'model' => $model,
    'config' => [
        'topBtn' => false,
        //'botBtn' => false,
    ],
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputUniverseWidget::class,
                    'options' => [
                        'config' => [

                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                        ]
                    ],
                ],
            ]
        ]
    ],
    'event' => [
        'formChange' => <<<JS
        function(event) {
             //event.preventDefault();
             $(this).submit()
             $('#reset').iziModal('close');
        } 
JS,

    ]

    
]);


?>
  </div>
<?php
$this->activeEnd();
ZIziModalWidget::end();
$this->pjaxEnd();
 ?>

