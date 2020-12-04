<?php


/**
 *
 * Class ZHoversCssLanlunnWidget
 * https://ianlunn.github.io/Hover/
 *
 * Created By: Musoxon Abdulhamidov
 * Refactored: Musoxon Abdulhamidov
 */


use zetsoft\widgets\animo\ZHoversCssLanlunnWidget;
use zetsoft\widgets\animo\ZHoversWidget;


echo ZHoversWidget::widget([
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
