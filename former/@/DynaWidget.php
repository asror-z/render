<?

use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidget;
use kartik\dynagrid\DynaGrid;
use zetsoft\widgets\former\ZDynaWidgetT;

?>

test data with <span> html span tags </span>

<?php

$model = User::findOne(['id' => 76]);


/*echo DynaGrid::widget([
        'columns' => $columns,
        'theme' => 'panel-info',
        'showPersonalize' => true,
        'storage' => 'db',
        'gridOptions' => [
            'dataProvider' => $dataProvider,
            'filterModel' => $model,
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
    ]);*/

echo ZDynaWidgetT::widget([
    'model' => $model,
    'config' => [
        'columnRelation' => true,
    ]
]);
?>
