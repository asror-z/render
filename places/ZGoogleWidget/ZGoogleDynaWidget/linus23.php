
<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\places\ZGoogleDb31Widget ;
use zetsoft\widgets\places\ZGoogleDb22WidgetZoir;
use zetsoft\widgets\places\ZGoogleReadyNavigationWidget;
use zetsoft\widgets\places\ZGoogleWidget;
use zetsoft\widgets\former\ZFormWidget;


echo ZGoogleDb31Widget::widget([
    'options' => [
        'config' => [
            'data' => [3, 16,17,18],
            'height'                 =>500,
            'width'                  =>800,
            'searchAutoComplete'     => false,
            'searchPlaceImageShow'   => false,
            'zoom'                   => '12',
            'markerCount'            => 10,
            'limitWayPoints'         => 2,
            'optimizeWaypoints'      => true,
            'draggable'              => true,
            'mapUseType'             => 'write',
            'dependPlace'            => true,
            'depend_id'              => 'coreinput-string_9',

        ]
    ]
]);





?>
