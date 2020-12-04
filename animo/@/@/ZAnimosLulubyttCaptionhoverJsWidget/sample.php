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

use zetsoft\widgets\animo\ZAnimosLulubyttCaptionhoverWidget;
use zetsoft\widgets\animo\ZAnimosOriginalhovereffectsWidget;

try {
    echo ZAnimosLulubyttCaptionhoverWidget::widget([
        'config' => [
            'type' => ZAnimosLulubyttCaptionhoverWidget::type['effect-lily'],
            'heading' => ['Head'],
            'content' => ['This is a simple content that you can use to see how content will appear'],
            'span' => ['Span'],
            'anchor' => ['https://tympanus.net/Development/HoverEffectIdeas/index.html#',
                'more_info' => 'View More'],
        ],
    ]);
} catch (Exception $e) {
}


