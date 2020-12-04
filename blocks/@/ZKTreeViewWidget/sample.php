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
use zetsoft\widgets\blocks\ZKTreeViewWidget;


echo ZKTreeViewWidget::widget([
    'config' => [
        'query'=> TreeProduct::find()->addOrderBy('root, lft'),
        'headingOptions' => [ 'label' => 'Store' ],
        'topRootAsHeading' => true , // это переопределить headingOptions
        'fontAwesome' => true ,
        'isAdmin' => true ,
        'iconEditSettings' => [
            'show' => 'list' ,
            'listData' => [
                'folder' => 'Folder' ,
                'file' => 'File' ,
                'mobile' => 'Phone' ,
                'bell' => 'Bell' ,
            ]
        ],
        'softDelete' => true ,
        'cacheSettings' => [ 'enableCache' => true ]
    ],
]);
