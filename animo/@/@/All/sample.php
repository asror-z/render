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

use zetsoft\widgets\animo\ZHoversImagesFreezeframeWidget;
use zetsoft\widgets\animo\ZHoversCssLanlunnWidget;
use zetsoft\widgets\animo\ZHoversCsshakeWidget;
use zetsoft\widgets\animo\ZBackgroundFixedBackgroundWidget;
use zetsoft\widgets\animo\ZCodropsWidget;
use zetsoft\widgets\animo\ZAllMagicWidget;
use zetsoft\widgets\animo\ZAHover3DWidget;
use zetsoft\widgets\animo\ZAnimosOriginalhovereffectsWidget;
use zetsoft\widgets\animo\ZBackCssLunarWidget;
use zetsoft\widgets\animo\ZBackgroundParallaxWidget;
use zetsoft\widgets\animo\ZIHoverWidget;
use zetsoft\widgets\blocks\ZCollapseWidget;
use zetsoft\widgets\animo\ZImagehoverWidget;
use zetsoft\widgets\animo\ZLoadersLoadersCssWidget;
use zetsoft\widgets\animo\ZLoaderTobiasahlinSpinkitWidget;
use zetsoft\widgets\animo\ZAFakeloaderWidget;





echo 'ZAHover3dWidget'  .EOL;

echo ZAHover3DWidget::widget([]);

echo EOL .EOL;
echo '<br>';






echo 'ZAnimosOriginalhovereffectsWidget' .EOL;
echo ZAnimosOriginalhovereffectsWidget::widget([
    'config'=>[

    ],
]);

echo EOL .EOL;
echo '<br>';



echo EOL .EOL;
echo '<br>';



echo EOL .EOL;
echo '<br>';


echo 'ZBackgroundParallaxWidget' .EOL;

echo ZBackgroundParallaxWidget::widget([
    'config' => [

    ]
]);


echo EOL .EOL;
echo '<br>';





echo EOL;

echo 'ZHoversCsshakeWidget' .EOL;

echo ZHoversCsshakeWidget::widget([
    'config' => [
        'types' =>ZHoversCsshakeWidget::type['shake-hard'],
        'text' => 'shake',
    ]
]);


echo EOL .EOL;

echo '<br>';



echo 'ZHoversCssLanlunnWidget' .EOL;
echo ZHoversCssLanlunnWidget::widget([
    'config'=>[
        'types2dTrans' =>ZHoversCssLanlunnWidget::types2dTran['hvr-grow'],
        'typesBackTrans' =>ZHoversCssLanlunnWidget::typesBackTran['hvr-fade'],
        'typesIconsTrans' =>ZHoversCssLanlunnWidget::typesIconsTran['hvr-icon-back'],
        'typesIcons' =>ZHoversCssLanlunnWidget::typesIcon['fa fa-chevron-circle-right'],
        'typesBorderTrans' =>ZHoversCssLanlunnWidget::typesBorderTran['hvr-border-fade'],
        'typesShadowTrans' =>ZHoversCssLanlunnWidget::typesShadowTran['hvr-shadow'],
        'typesBubbles' =>ZHoversCssLanlunnWidget::typesBubble['hvr-bubble-top'],
        'typesCurls' =>ZHoversCssLanlunnWidget::typesCurl['hvr-curl-top-left'],
    ]
]);


echo EOL .EOL;
echo '<br>';


echo 'ZHoversImagesFreezeframeWidget' .EOL;
echo ZHoversImagesFreezeframeWidget::widget([
    'config' => [

    ]
]);


echo EOL .EOL;








echo EOL;
echo '<br>';



echo 'ZHoverWidget' .EOL;

echo ZIHoverWidget::widget([

    'config' => [
        'circleAction' => ZIHoverWidget::circleAction['bottom_to_top'],
        'squareAction' => ZIHoverWidget::squareAction['scale_up'],
        'type' => ZIHoverWidget::type['circle'],
        'image' => '/slick/download.jpg',
        'circleEffect' => ZIHoverWidget::circleEffect['effect12'],
        'squareEffect' => ZIHoverWidget::squareEffect['effect12'],
        'color' => ZIHoverWidget::color['colored']

    ]
]);

echo ZIHoverWidget::widget([

    'config' => [
        'circleAction' => ZIHoverWidget::circleAction['bottom_to_top'],
        'squareAction' => ZIHoverWidget::squareAction['scale_up'],
        'type' => ZIHoverWidget::type['square'],
        'image' => '/slick/download.jpg',
        'circleEffect' => ZIHoverWidget::circleEffect['effect12'],
        'squareEffect' => ZIHoverWidget::squareEffect['effect12'],
        'color' => ZIHoverWidget::color['colored']

    ]
]);


echo EOL .EOL;




echo EOL;

echo '<br>';

echo 'ZIHoverWidget' .EOL;

echo ZIHoverWidget::widget([


]);

echo ZIHoverWidget::widget([


]);

echo EOL .EOL;

echo '<br>';




echo EOL;




echo 'ZImagehoverWidget' .EOL;
echo ZImagehoverWidget::widget([


]);


echo EOL .EOL;
echo '<br>';


echo 'ZLoadersLoadersCssWidget' .EOL;


echo ZLoadersLoadersCssWidget::Widget([
    'config'=>[
        'type'=>ZLoadersLoadersCssWidget::type['ball-grid-pulse'],
        'aLayout' => [
            '',
            '',
            '',
            '',
        ]
    ]
]);

echo EOL .EOL;
echo '<br>';



echo 'ZLoaderTobiasahlinSpinkitWidget' .EOL;
echo ZLoaderTobiasahlinSpinkitWidget::widget([
    'config' => [
        'type' => ZLoaderTobiasahlinSpinkitWidget::type['sk-grid'],
        'sk-size' => '100px',
        'sk-color' => '#48466d'
    ]
]);

echo EOL .EOL;

echo '<br>';
echo 'ZLoaderJimkellerFakeloaderWidget' .EOL;

echo ZAFakeloaderWidget::widget([
    'config' => [
        'spinner'=>ZAFakeloaderWidget::spinner['spinner5'],
        'bgColor'=>'#a6e3e9',
        'timeToHide'=>50
    ]
]);

echo EOL .EOL;
