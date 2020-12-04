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

use zetsoft\widgets\themes\ZInfoBoxWidget;


echo ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Primary,
        'title' => 'Bar primary gradient',
        'bGradient' => true,
        'bProgressBar' => true,
        'sProgressBarText' => '70% выполнено',
        'iProgressBarValue' => 70
    ]
]);
