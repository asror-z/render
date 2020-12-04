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

use zetsoft\widgets\former\ZWizardStepsWidget;
/*use zetsoft\widgets\former\ZWizardSteps1Widget;*/

echo ZWizardStepsWidget::widget([
    'config' => [
        'type' => ZWizardStepsWidget::type['wiz1'],
        'title' => 'Wizard Title',
        'picture' => '/publish/image/filter_images/img1.jpg',
        'data' => [
            ['Step1 title', '', '/render/images/assets/image/filter_images/img1.jpg'],
            ['Step2 title', '', '/render/images/assets/image/filter_images/img2.jpg'],
            ['Step3 title', '', '/render/images/assets/image/filter_images/img3.jpg'],
            ['Step4 title', '', '/render/images/assets/image/filter_images/img4.jpg'],
            ['Step5 title', '', '/render/images/assets/image/filter_images/img5.jpg'],
            ['Step6 title', '', '/render/images/assets/image/filter_images/img6.jpg'],

        ],
    ]

]);
