<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 */

use kartik\builder\Form;
use zetsoft\widgets\former\ZFormWidgetJ;
use zetsoft\widgets\places\ZMaptalksWidget ;

echo  ZMaptalksZoirWidget ::widget([
    'config' => [
        'height'               => 600, // height in vh
        'width'                => 100, //width in %
        'zoom'                 => 9,
        'markerCount'          => 2,
        'mapVision'            =>'typical', //'typical', '3d'
        'mapDegree'            => 0, //same as mapVision but its in number
        'scrollwheel'          => true,
        '{savedCoordinates}'   => [130,131,140],
    ]
]);

echo ZFormWidgetJ::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\places\ZMaptalksZoirWidget::className(),
                    'options' => [
                        'config' => [
                            'height'               => 600,     // height in vh
                            'width'                => 100,   //width in %
                            'zoom'                 => 9,    //
                            'markerCount'          => 2,   //set marker count
                            'mapVision'            =>'typical', //'typical', '3d'
                            'mapDegree'            => 0, //same as mapVision but its in number
                            'scrollwheel'          => true,
                            '{savedCoordinates}'   => [130,131,140],
                        ]
                    ]
                ],
            ]
        ],



    ],

]);

