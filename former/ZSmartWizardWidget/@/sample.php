<?php

/**
 *
 *
 * Author:  Dilshodjon Olimov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\former\ZSmartWizardWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZInputLatinWidget;
use zetsoft\widgets\market\ZHotOfferWidget;
use zetsoft\widgets\themes\ZCardWidget;


$widget =   ZInputLatinWidget::widget([]). ZHotOfferWidget::widget([]);

ob_start();
ZCardWidget::begin([]);
echo ZHotOfferWidget::widget([]);
ZCardWidget::end();
$get = ob_get_clean();

echo ZSmartWizardWidget::widget([
    'config' => [
        
        ],
    'data' => [
        ['Step1 title', 'Step1 Subtitle',    $get


        ],
        ['Step2 title', 'Step2 Subtitle', 'Step2 text'],
        ['Step3 title', 'Step3 Subtitle', 'Step3 text'],
        ['Step4 title', 'Step4 Subtitle', 'Step4 text'],
        ['Step5 title', 'Step5 Subtitle', 'Step5 text'],
    ]
]);


