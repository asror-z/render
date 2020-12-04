<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
use kartik\tree\TreeView;
use zetsoft\models\App\eyuf\TreeProduct;
use zetsoft\widgets\navigat\ZKTreeViewWidget;

echo ZKTreeViewWidget::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'config'=>[
        'query' => \zetsoft\models\tree\TreeProduct::find()->addOrderBy('root, lft'),
        'headingOptions'=>['label'=>'Categories'],
        'name' => 'kv-product', // input name
        'value' => '1',     // values selected (comma separated for multiple select)
        'asDropdown' => true,   // will render the tree input widget as a dropdown.
        'multiple' => true,     // set to false if you do not need multiple selection
        'fontAwesome' =>  false,  // render font awesome icons
        'rootOptions' => [
            'label'=>'<i class="fa fa-tree"></i>',  // custom root label
            'class'=>'text-success'
        ],
        'displayValue'      => 1,
    ]
]);
