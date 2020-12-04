<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use kartik\tree\models\Tree;
use kartik\tree\TreeViewInput;

echo TreeViewInput::widget([
    'name' => 'kvTreeInput',
    'value' => 'true', // preselected values
    'query' => Tree::find()->addOrderBy('root, lft'),
    'headingOptions' => ['label' => 'Store'],
    'rootOptions' => ['label'=>'<i class="fas fa-tree text-success"></i>'],
    'fontAwesome' => true,
    'asDropdown' => true,
    'multiple' => true,
    'options' => ['disabled' => false]
]);
