<?php


//use dmstr\db\tests\unit\Product;
//use zetsoft\models\vade\Product;
use zetsoft\models\vade\Book;


use zetsoft\widgets\navigat\ZKTreeviewWidget;

echo '<h1>appVersion One</h1>';
echo ZKTreeviewWidget::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'sQuery' => Book::find()->addOrderBy('root, lft'),
    'bFontAwesome' => true,     // optional
    'bIsAdmin' => true,         // optional (toggle to enable admin mode)
    'iDisplayValue' => 1,        // initial display value

]);
