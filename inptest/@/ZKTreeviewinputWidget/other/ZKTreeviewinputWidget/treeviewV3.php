<?php


use zetsoft\models\vade\Product;
use zetsoft\widgets\navigat\ZKTreeviewWidget;

echo "<br><h1>appVersion Three</h1>";
echo ZKTreeviewWidget::widget([

    'sQuery' => Product::find()->addOrderBy('root, lft'),

    'aHeadingOptions' => ['label' => 'Categories'],

    'bFontAwesome' => true,     // optional

    'bIsAdmin' => true,         // optional (toggle to enable admin mode)

    'iDisplayValue' => 1,        // initial display value

    'bSoftDelete' => true,       // defaults to true

    'aCacheSettings' => [
        'enableCache' => true   // defaults to true
    ],

    'aNodeAddlViews' => [
        ZKTreeviewWidget::VIEW_PART_1 => '@widget/kartik/treeview/views/view_part_1',
        ZKTreeviewWidget::VIEW_PART_2 => '@widget/kartik/treeview/views/view_part_2',
        ZKTreeviewWidget::VIEW_PART_3 => '@widget/kartik/treeview/views/view_part_3',
        ZKTreeviewWidget::VIEW_PART_4 => '@widget/kartik/treeview/views/view_part_4',
        ZKTreeviewWidget::VIEW_PART_5 => '@widget/kartik/treeview/views/view_part_5',
    ]
]);
