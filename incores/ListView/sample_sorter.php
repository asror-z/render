<?php

/**
 *
 *
 * Author:  Maxamadjonov Jaxongir
 *
 */

use yii\data\ArrayDataProvider;
use yii\data\Sort;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use zetsoft\models\user\UserCompany;
use zetsoft\models\page\PageControl;
use zetsoft\models\shop\ShopProduct;
use zetsoft\system\Az;
use zetsoft\system\column\ZLinkPager;
use zetsoft\system\column\ZScrollPager;
use yii\widgets\LinkPager;
use zetsoft\widgets\market\ZMarketCardsJaxonWidget;
use zetsoft\widgets\market\ZMarketCardsOnlyWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;

$model=Az::$app->market->product->allProducts();

/*
$dataProvider = new ActiveDataProvider([
    'query' => CoreProduct::find(),
    'pagination' => [
        'pageSize' => 4,
    ],
    'sort' => [
        //'attributes' => ['id'],
        'defaultOrder' => [
            'id' => SORT_ASC,
        ]
    ],
]);*/

$sort = new Sort([
    'attributes' => [
        'name',
        'price'
        // or any other attribute
    ],
]);
$dataProvider= new ArrayDataProvider([
                'allModels' => $model,
    'sort' => $sort,
            ]);
echo $sort->link('name') . ' | ' . $sort->link('price');
$listview= ListView::widget([
    'layout' => "{sorter}\n{summary}\n{items}\n{pager}",
    'dataProvider' => $dataProvider,

    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model, $key, $index, $widget) {
         echo '<div class="item">';
        echo $model->title;
        echo '</div>';

        // or just do some echo
        // return $model->title . ' posted by ' . $model->author;
    },
    'pager' => [
        'class' =>ZLinkPager::class,

    ],
    'sorter' => [

    ],

]);


 echo $listview;
/*echo zetsoft\widgets\market\ZProductTabsJaxonWidget::widget([
    'model' =>Az::$app->market->product->allProducts(),
    'config' => [
          


    ]]);*/
echo '<br><br><br>';
   ?>
<!--<div  class="container-fluid my-2">
    <div class="row {filter_class}">

        <div class="col-md-3">
            <div class="switch-parent">
                <button class="mx-0 btn btn-success" id="switch_to_col">
                    <i class="fa fa-th-list"></i>
                </button>
                <button class="mx-0 btn btn-outline-success" id="switch_to_list">
                    <i class="fa fa-th-large"></i>
                </button>
            </div>
        </div>
        <div class="col-md-9 d-block">
            {filter}
        </div>

    </div>

    <div class="row wrapper-product">

       


    </div>

    <div class="dilshod">
        {pager}
    </div>
</div>
<p id="oxir"> </p>-->


