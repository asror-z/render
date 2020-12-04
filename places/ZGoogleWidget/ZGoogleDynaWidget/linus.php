
<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;
use zetsoft\widgets\places\ZGoogleReadyWidgetLinus;
use zetsoft\widgets\former\ZFormWidget;

echo ZHInputWidget::widget([
    
]);

echo ZGoogleReadyWidgetLinus::widget([
    'options' => [
        'config' => [
            'height'                 => 500,
            'width'                  => 800,
            'searchAutoComplete'     => true,
            'searchPlaceImageShow'   => FALSE,
            'zoom'                   => '12',
            'markerCount'            => 10,
            'limitWayPoints'         => 2,
            'optimizeWaypoints'      => true,
            'draggable'              => true,
            'mapUseType'             => 'write',
            'dependPlace'            => true,
            'depend_id'              => 'w3',

        ]
    ]
]);





?>
