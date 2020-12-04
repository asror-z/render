<?php

/**
 *
 * Class ZHoversCsshakeWidget
 * https://elrumordelaluz.github.io/csshake/
 *
 * Created By: Musoxon Abdulhamidov
 * Refactored: Musoxon Abdulhamidov
 */

use zetsoft\widgets\animo\ZCsshakeWidget;
use zetsoft\widgets\animo\ZHoversCsshakeWidget;


echo EOL;


echo ZCsshakeWidget::widget([
    'config' => [
        'types' =>ZCsshakeWidget::type['shake-hard'],
        'text' => 'shake',
    ]
]);
