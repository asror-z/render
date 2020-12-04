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
use zetsoft\models\user\User;
use zetsoft\system\column\ZLinkPager;
use zetsoft\system\column\ZScrollPager;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZListViewWidgetOld;

/*$dataProvider = new ActiveDataProvider([
    'query' => CoreControl::find(),
    'pagination' => [
        'pageSize' => 5,
    ],
    'sort' => [
        //'attributes' => ['id'],
        'defaultOrder' => [
            'id' => SORT_ASC,
        ]
    ],
]);  */
$model = new PageControl();
//$form = $this->activeBegin();
$this->pjaxBegin();
echo ZListViewWidgetOld::widget([
    'model' => $model,
    
    'config' => [
        
    ]
]);
$this->pjaxEnd();
 /*
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'pager' => [
        'class' => ZLinkPager::class,

    ],


]);
/*$model = new CoreControl();


echo ZDynaWidget::widget([
    'model' => $model,

    'config' => [
        'pagerAjax' => true,
    ]

]);
$this->activeEnd();*/
