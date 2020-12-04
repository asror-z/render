<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\export\ExportMenu;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidget2D;
use zetsoft\widgets\former\ZExportWidget2D;


$model = new EyufScholar();
echo 'Test text';

echo ExportMenu::widget([
    'dataProvider' => $model->search(),
    ///'columns' => $columns,
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-secondary'
    ]
]);

echo ZExportWidget2D::widget([
    'model' =>$model
])  ;

echo ZDynaWidget2D::widget([
   'model' => $model
]);
