<?php

/**
 *
 *
 * Author:  Maxamadjonov Jaxongir
 *
 */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use zetsoft\models\user\UserCompany;
use zetsoft\models\page\PageControl;
use zetsoft\system\column\ZLinkPager;
use zetsoft\system\column\ZScrollPager;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;
/*
$dataProvider = new ActiveDataProvider([
    'query' => CoreControl::find(),
    'pagination' => [
        'pageSize' => 25,
    ],
    'sort' => [
        //'attributes' => ['id'],
        'defaultOrder' => [
            'id' => SORT_ASC,
        ]
    ],  
]);

$form = $this->activeBegin();
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'pager' => [
    'class' =>ZScrollPager::class,
    'isGrid' => false
        ],


]);
/*$model = new CoreControl();


echo ZDynaWidget::widget([
    'model' => $model,

    'config' => [
        'pagerAjax' => true,
    ]

]);  */
//$this->activeEnd();
$model = new PageControl();
//$form = $this->activeBegin();
$this->pjaxBegin();
echo '<div>';
echo ZListViewWidgetOld::widget([
    'model' => $model,
    'config' => [
        'pageSize' => 30,
        'pager' => [
            'class' => ZScrollPager::class,
            'isGrid' => false,
            'item' => '.item',
            'container' => '.list-view',
            'paginationSelector' => '.list-view .pagination',
            'pagination' => [
                //'limit' => 20,
                'negativeMargin' => 1000,

               //'defaultPageSize' =>70,
                
            ],



        ],
    ],
    'sort' => [
       
        'defaultOrder' => [
            'id' => SORT_ASC,
        ]
    ],
]);
echo '</div>';
$this->pjaxEnd();
        
