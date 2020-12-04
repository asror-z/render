<?php

use zetsoft\models\vade\Product;
use zetsoft\widgets\navigat\ZKTreeviewWidget;
use zetsoft\widgets\treeview\ZTreeviewWidget;

echo "<br><h1>appVersion Two</h1>";
echo ZKTreeviewWidget::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'sQuery' => Product::find()->addOrderBy('root, lft'),
  //  'aHeadingOptions' => ['label' => 'Categories'],
    'bFontAwesome' => true,     // optional
    'bIsAdmin' => false,         // optional (toggle to enable admin mode)
    'iDisplayValue' => 1,        // initial display value
    'bSoftDelete' => true,       // defaults to true
    'aCacheSettings' => [
        'enableCache' => true   // defaults to true
    ],
    'aIconEditSettings' =>[
        'show' => 'text'
    ]
]);
