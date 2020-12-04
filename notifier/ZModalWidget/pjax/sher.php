<?php


use rmrevin\yii\fontawesome\FA;
use yii\widgets\Pjax;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZTextareaWidget;
use zetsoft\widgets\market\ZInputNumberWidget;
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetJavohir;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;


/** @var ZView $this */
$this->pjaxBegin();


?>

Modal Begin

<?php

$model = $this->modelGet(CoreInput::class, 10);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorRequired]
];

/*Pjax::begin([]);*/

echo ZFormWidget::widget([
    'model' => $model,
     'config' => [
/*         'topBtn' => false,
         'botBtn' => false,*/
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
        ]
]);

 
/*Pjax::end();*/
$this->activeEnd();

?>

Modal End


<?php

$this->pjaxEnd();
