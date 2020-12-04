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
use zetsoft\widgets\notifier\ZModalWidgetD;
use zetsoft\widgets\notifier\ZModalWidgetJavohir;
use zetsoft\widgets\notifier\ZModalWidgetRavshan;

/** @var ZView $this */
/** @var ZView $this */

$this->pjaxBegin();


$model = $this->modelGet(CoreInput::class, 10);
$items = Az::$app->forms->modelz->data();

$this->modelSave($model);

if ($this->formModel($model)) {

}



echo date('H:i:s');

$post = $this->httpPost('CoreInput');
$value = ZArrayHelper::getValue($post, 'string_1');


vd($model->string_1);

$model->string_1 = $value;
$model->save();


ZModalWidgetD::begin([
    'id' => 'form',
    'event' => [
        'submit' => <<<JS

JS

    ]
]);

$active = new Active();
$active->id = 'form';

$form = $this->activeBegin($active);

echo ZFormWidget::widget([
    'model' => $model,
     'config' => [
         'topBtn' => false,
         'botBtn' => false,
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
             $('#form-modal').modal('hide');
        } 
JS,

    ]
]);

$this->activeEnd();

ZModalWidgetD::end();
$this->pjaxEnd();
