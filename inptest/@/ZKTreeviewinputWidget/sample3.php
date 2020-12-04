<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 * Modified: Abdufattohov Javohir | Murodov Mirbosit
 * Url: ---
 * https://demos.krajee.com/tree-manager
 * https://demos.krajee.com/tree-manager-demo/tree-view
 */


use kartik\tree\TreeViewInput;
use zetsoft\models\App\eyuf\TreeProduct;
use zetsoft\widgets\inputes\ZKTreeInputWidget;


echo ZKTreeInputWidget::widget([
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
    ],
]);
