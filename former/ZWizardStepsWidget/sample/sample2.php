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


echo ZWizardStepsWidget::widget([
    'config' => [
        'type' => ZWizardStepsWidget::type['wiz2'],                'data' => [
            ['Section1', 'SECTION_TITLE_1`', '/publish/image/filter_images/img1.jpg'],
            ['Section2', 'SECTION_TITLE_2`', '/publish/image/filter_images/img2.jpg'],
            ['Section3', 'SECTION_TITLE_3`', '/publish/image/filter_images/img3.jpg'],
            ['Section4', 'SECTION_TITLE_4`', '/publish/image/filter_images/img4.jpg'],
            ['Section5', 'SECTION_TITLE_5`', '/publish/image/filter_images/img5.jpg'],
            ['Section6', 'SECTION_TITLE_6`', '/publish/image/filter_images/img6.jpg'],
            ['Section7', 'SECTION_TITLE_7`', '/publish/image/filter_images/img7.jpg'],

        ]
    ]
]);
