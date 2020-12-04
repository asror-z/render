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
        'query' => TreeProduct::find()->addOrderBy('root, lft'),
    ],
]);
