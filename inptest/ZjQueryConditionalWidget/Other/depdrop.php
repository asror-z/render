<?php

use kartik\widgets\DepDrop;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use zetsoft\former\deps\DepDropForm;
use zetsoft\models\libra\Category;
use zetsoft\models\vade\Company;
use zetsoft\models\vade\Product;
use zetsoft\widgets\inputes\ZKDepDropWidgetCopy;


// THE VIEW

$form = ActiveForm::begin();

$model = new DepDropForm();


// Child # 1
echo $form->field($model, 'cat')->widget(ZKDepDropWidgetCopy::class, [
    'target' => Category::class,
]);


echo $form->field($model, 'cat')->widget(ZKDepDropWidgetCopy::class, [
    'target' => Category::class,
]);


//$catList = [
//    1 => 'Electronics',
//    2 => 'Books',
//    3 => 'Home & Kitchen'
//];


//$cats = \zetsoft\models\libra\DepCategories::find()->where(array('>', 'category_id', 1))->all();
//echo '<pre>';
//print_r($cats);

//$cats = \zetsoft\models\libra\DepCategories::find()->where(array('>', 'category_id', 1))->all();

//echo '<pre>';
//print_r($cats);


//$form = ActiveForm::begin();

// Parent
//echo $form->field($model, 'cat')->dropDownList($catList, ['id' => 'cat-id']);

// Child # 1
//echo $form->field($model, 'cat')->widget(ZKDepDropWidget::class, [
//    'target' => Company::class,
//]);

// Child # 1
//echo $form->field($model, 'subcat')->widget(ZKDepDropWidget::class, [
//    'target' => Category::class,
//    'parent' => Company::class,
//]);

// Child # 3
//echo $form->field($model, 'prods')->widget(ZKDepDropWidget::class, [
//    'target' => Products::class,
//    'parent' => Category::class,
//]);

// Child # 4
//echo $form->field($model, 'subprods')->widget(ZKDepDropWidget::class, [
//    'target' => Products::class,
//    'parent' => Category::class,
//]);

 /*Child # 1*/
echo $form->field($model, 'subcat')->widget(ZKDepDropWidgetCopy::class, [
    'target' => Product::class,
    'parent' => Category::class,
]);

// Child # 2
//echo $form->field($model, 'prod')->widget(DepDrop::classname(), [
//    'pluginOptions' => [
//        'depends' => ['cat-id', 'subcat-id'],
//        'placeholder' => 'Select...',
//        'url' => Url::to(['/core/core/prod'])
//    ]
//]);

ActiveForm::end();

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
