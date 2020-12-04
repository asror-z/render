<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<script src="/vendors/kartik-v/yii2-widget-depdrop/src/assets/js/depdrop.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin="anonymous"></script>
<style>
    #page_module_id{
        display:block!important;
    }

</style>

<?php

/*
* SCENARIO 1: A 3-level nested dependency example
*/
// THE VIEW
use kartik\base\Module;
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\actives\ZAjaxForm;

$model = new PageModule();
$control = new PageControl();
$action = new PageAction();
$form=ActiveForm::begin();

$model->page_module_id = Module::find()->where(['id'=>$model->page_module_id])->one()->country_id;
$form->field($model, 'page_module_id')->dropDownList(PageControl::getDb(), ['prompt'=>'Select CoreControl', 'id'=>'page_module_id']);

// Child # 1
echo $form->field($model, 'page_control_id')->widget(DepDrop::classname(), [
    'data'=>PageAction::getDb($model->page_module_id),
    'options'=>['id'=>'page_control_id', 'prompt'=>'Select Action...'],
    'pluginOptions'=>[
        'depends'=>['page_control_id'],
        'placeholder'=>'Select... Action',
        'url'=>Url::to(['/eyuf/mirbosit/'])
    ]
]);

$form->field($model, 'name')->textInput(['maxlenght' => true]);

// Child # 2
echo $form->field($control, 'page_module_id')->widget(DepDrop::classname(), [
    'data'=>PageAction::getDb($model->page_module_id),
    'options'=>['id'=>'page_module_id', 'prompt'=>'Select Action...'],
    'pluginOptions'=>[
        'depends'=>['page_module_id'],
        'placeholder'=>'Select... Action',
        'url'=>Url::to(['/eyuf/mirbosit/'])
    ]
]);

$form->field($model, 'name')->textInput(['maxlenght' => true]);

ActiveForm::end();
?>
