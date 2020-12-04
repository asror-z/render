<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\tree\TreeView;
use zetsoft\models\test\TreeShop;
use zetsoft\models\tree\TreeAvto;
use zetsoft\system\kernels\ZView;
use kartik\icons\FontAwesomeAsset;

//$model = $this->modelGet(TreeShop::class, 4);
/** @var ZView $this */

//$model->configs->rules = validatorSafe;
//$model->columns();

//$items = $this->modelData();
//$form = $this->activeBegin();

//$this->modelSave($model);

/*
echo ZKTreeViewWidget::widget([

]);
*/

FontAwesomeAsset::register($this);

echo TreeView::widget([

    'query' => TreeShop::find(),
    'headingOptions' => [
        'root' => 'Categories',
        'label' => 'Категории'
    ],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => true,       // defaults to true
    'cacheSettings' => [
        'enableCache' => true   // defaults to true
    ]
]);

