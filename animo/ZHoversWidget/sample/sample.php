<?php


/**
 *
 * Class ZHoversCssLanlunnWidget
 * https://ianlunn.github.io/Hover/
 *
 * Created By: Musoxon Abdulhamidov
 * Refactored: Musoxon Abdulhamidov
 */


use zetsoft\widgets\animo\ZHoversWidget;


echo ZHoversWidget::widget([
'config'=>[
    'types2dTrans' =>ZHoversWidget::types2dTran['hvr-grow'],
    'typesBackTrans' =>ZHoversWidget::typesBackTran['hvr-fade'],
    'typesIconsTrans' =>ZHoversWidget::typesIconsTran['hvr-icon-back'],
    'typesIcons' =>ZHoversWidget::typesIcon['fa fa-chevron-circle-right'],
    'typesBorderTrans' =>ZHoversWidget::typesBorderTran['hvr-border-fade'],
    'typesShadowTrans' =>ZHoversWidget::typesShadowTran['hvr-shadow'],
    'typesBubbles' =>ZHoversWidget::typesBubble['hvr-bubble-top'],
    'typesCurls' =>ZHoversWidget::typesCurl['hvr-curl-top-left'],
]
]);
