<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Created By :ElnurController Suyunov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use kartik\tree\TreeView;
use zetsoft\models\App\eyuf\TreeProduct;
use zetsoft\models\test\TestTreeProduct;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\blocks\ZKTreeViewWidget;

$model = $this->modelGet(TreeProduct::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();

$this->modelSave($model);

echo ZKTreeViewWidget::widget([
    'config' => [
        // single query fetch to render the tree
        'query'=> TestTreeProduct::find()->addOrderBy('root, lft'),
        'headingOptions' => ['label' => 'Categories'],
        'fontAwesome' => true,     // optional
        'isAdmin' => false,         // optional (toggle to enable admin mode)
        'displayValue' => 1,        // initial display value
        'softDelete' => true,       // defaults to true
        'cacheSettings' => [
            'enableCache' => true,   // defaults to true
                'activeOrig' => true,


        ],
    ]

]);








