<?php
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;



$catList = [
    1 => 'Electronics',
    2 => 'Books',
    3 => 'Home & Kitchen'
];

$action->icon =true;
$model = new \zetsoft\models\core\CoreInput();
$form = ActiveForm::begin();


// Parent
echo $form->field($model, 'int_1')->dropDownList($catList, ['id'=>'cat-id']);

// Child level 1

echo $form->field($model, 'int_2')->widget(DepDrop::classname(), [
    'options'=>[
        'id'=>'subcat-id-1'
    ],
    'pluginOptions'=>[
        'depends'=>['cat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/depdropreturn/ajax1'])
    ]
]);

// Child level 2
echo $form->field($model, 'int_3')->widget(DepDrop::classname(), [
    'options'=>[
        'id'=>'subcat-id-2'
    ],
    'pluginOptions'=>[
        'depends'=>['subcat-id-1'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/site/subcat'])
//        'url'=>Url::to([Yii::$app->controller->id.'/subcat'])
    ]
]);

// Child level 3
echo $form->field($model, 'int_4')->widget(DepDrop::classname(), [
    'options'=>['id'=>'subcat-id'],
    'pluginOptions'=>[
        'depends'=>['cat-id'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/site/subcat'])
    ]
]);

ActiveForm::end();


