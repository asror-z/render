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

use zetsoft\widgets\audios\ZResponsiveVoiceWidget;
use zetsoft\widgets\audios\ZSpeakerWidget;

echo ZSpeakerWidget::widget ([
    'config' => [
        'type' => ZSpeakerWidget::type['Russian Female'],
        'icon' => '/render/audios/assets/audio/responciveVoice/rupor.png',
        'bg_color' => '#000000',

    ]
]);
