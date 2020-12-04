<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
/*
$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
            'vAlign' => 'middle',
            'hAlign' => 'center',
            'width' => '120px',
            'pageSummary' => true,
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'email',
            'vAlign' => 'middle',
            'hAlign' => 'center',
            'width' => '120px',
            'pageSummary' => true,
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'name',
        ],
    ];*/

 /*
$data = [
    ["id"=>1,"name"=>"Cyrus","email"=>"risus@consequatdolorvitae.org"],
    ["id"=>2,"name"=>"Justin","email"=>"ac.facilisis.facilisis@at.ca"],
    ["id"=>3,"name"=>"Mason","email"=>"in.cursus.et@arcuacorci.ca"],
    ["id"=>4,"name"=>"Fulton","email"=>"a@faucibusorciluctus.edu"],
    ["id"=>5,"name"=>"Neville","email"=>"eleifend@consequatlectus.com"],
    ["id"=>6,"name"=>"Jasper","email"=>"lectus.justo@miAliquam.com"],
    ['id' =>7,"name"=>"Neville","email"=>"Morbi.non.sapien@dapibusquam.org"],
    ['id' =>8,"name"=>"Neville","email"=>"condimentum.eget@egestas.edu"],
    ['id' =>9,"name"=>"Ronan","email"=>"orci.adipiscing@interdumligulaeu.com"],
    ['id' =>10,"name"=>"Raphael","email"=>"nec.tempus@commodohendrerit.co.uk"],
];



function filter($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($data, 'filter');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = ['id' => null, 'name' => $namefilter, 'email' => $mailfilter];

*/

$models = User::find()->asArray()->all();


$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],

        [
            'class' => DataColumn::class,
            'attribute' => 'name',

        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'text',

        ],

    ];



//vdd($models);

$query = new ZArrayQuery();
$query->from($models);

$query->andFilterWhere([
    'id' => 6
]);

echo DynaGrid::widget([
    'columns' => $columns,
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'session',
    'gridOptions' => [
        'dataProvider' => new ArrayDataProvider([
            'key'=>'id',
            'allModels' => $query->all(),
            'sort' => [
                'attributes' => ['id', 'name', 'email'],
            ],
        ]),
        //'filterModel' => $searchModel,
        'showPageSummary' => true,
        'floatHeader' => true,
        'pjax' => true,
        'responsiveWrap' => false,
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' => '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this asset as you scroll</em></div>',
            'after' => false
        ],
        'toolbar' => [
            ['content' =>
                Html::button('<i class="fas fa-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
                Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-outline-secondary', 'title' => 'Reset Grid'])
            ],
            ['content' => '{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}',
        ]
    ],
    'options' => ['id' => 'dynagrid-1'] // a unique identifier is important
]);
