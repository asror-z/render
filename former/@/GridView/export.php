<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use yii\helpers\Html;
use zetsoft\models\menu\Menu;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNew;

$model = new EyufDocument();

/*echo ZDynaWidgetNew::widget([
    'model' => $model
]);*/

use kartik\export\ExportMenu;
use kartik\grid\GridView;

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'name',
];

echo ExportMenu::widget([
        'dataProvider' => $model->search(),
        'columns' => [
            [
                'class' => 'kartik\grid\SerialColumn',
                'exportMenuStyle' => [ // format the serial column cells
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['argb' => 'FFE5E5E5']
                    ]
                ]
            ],
            ['attribute' => 'id', 'hAlign' => GridView::ALIGN_CENTER],
            'name',
            [
                'attribute'=>'id',  // note this column config is changed in ExportMenu vs GridView
                'label'=>'name',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->name;
                }
            ],
            
            [
                'attribute'=>'status',
            ],
        ],
    ]) . "<hr>\n".
    GridView::widget([
        'dataProvider' => $model->search(),
        'columns' =>  $gridColumns
    ]);
