<?
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\helpers\Html;
use yii\data\ActiveDataProvider;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZExportMenuWidget;

?>
test data with <span> html span tags </span>
<?php
$model = User::findOne(['id' => 76]);
$query = User::find();

$dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => [
            'id' => SORT_DESC,
        ]
    ],
]);

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'email',
    'name',
    ['class' => 'kartik\grid\ActionColumn', 'urlCreator'=>function(){return '#';}]
];

echo ZExportMenuWidget::widget([
        'dataProvider' => $dataProvider,
        'triggerDownload' => true,
        'columns' => $gridColumns,
        'showConfirmAlert' => false,
        'dropdownOptions' => [
            'label' => 'Export All',
            'class' => 'btn btn-secondary'
        ]
    ]) /*. "<hr>\n".
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
    ])*/;

?>
