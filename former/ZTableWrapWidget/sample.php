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


use zetsoft\widgets\former\ZTableWrapWidget;

echo ZTableWrapWidget::widget([
    'data' => [
        ['Step1 title', 'Step1 Subtitle', 'Step1 text','Step1 All111'],
        ['Step2 title', 'Step2 Subtitle', 'Step2 text','Step2 All222'],
        ['Step3 title', 'Step3 Subtitle', 'Step3 text','Step3 All333'],
        ['Step4 title', 'Step4 Subtitle', 'Step4 text','Step4 All444'],
        ['Step5 title', 'Step5 Subtitle', 'Step5 text','Step5 All555'],
        ['Step6 title', 'Step6 Subtitle', 'Step6 text','Step6 All666'],
    ]
]);
