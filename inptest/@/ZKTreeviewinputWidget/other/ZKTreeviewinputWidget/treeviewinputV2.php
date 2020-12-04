<?php

use zetsoft\models\vade\Product;
use zetsoft\widgets\inputes\ZKTreeviewinputWidget;

echo '<br><br><br><span class="text primary">Dropdown tree</span>';
echo ZKTreeviewinputWidget::widget([
// single query fetch to render the tree
// use the Product model you have in the previous step
    'sQuery' => Product::find()->addOrderBy('root, lft'),
    'aHeadingOptions'=>['label'=>'Categories'],
    'name' => 'kv-product', // input name
    'value' => '1,2,3',     // values selected (comma separated for multiple select)
    'bAsDropdown' => true,   // will render the tree input widget as a dropdown.
    'multiple' => false,     // set to false if you do not need multiple selection
    'bFontAwesome' => true,  // render font awesome icons
    'aRootOptions' => [
        'label'=>'<i class="fas fa-tree"></i>',  // custom root label
        'class'=>'text-success'
    ],
    //'optionss'=>['disabled' => true],
]);
