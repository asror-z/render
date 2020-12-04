<?php

use Codeception\PHPUnit\ResultPrinter\HTML;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;
use zetsoft\system\helpers\ZArrayHelper;

$columnsSize = new \zetsoft\models\user\User();
    //'dataProvider'=> $columnsSize->search(),


$dynagrid = DynaGrid::begin([
    'model' => $columnsSize,
    'theme'=>'panel-info',
    'showPersonalize'=>true,
    'storage' => 'session',
    'gridOptions'=>[
        //'dataProvider'=>$dataProvider,
        //'filterModel'=>$searchModel,
        'showPageSummary'=>true,
        'floatHeader'=>true,
        'pjax'=>true,
        'responsiveWrap'=>false,
        'panel'=>[
            'heading'=>'<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' =>  '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this demo as you scroll</em></div>',
            'after' => false
        ],
    ],
    'options'=>['id'=>'dynagrid-1'] // a unique identifier is important
]);
if (substr($dynagrid->theme, 0, 6) == 'simple') {
    $dynagrid->gridOptions['panel'] = false;
}
DynaGrid::end();
