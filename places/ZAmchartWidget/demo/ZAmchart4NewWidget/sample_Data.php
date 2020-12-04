<?php

/**
 *
 *
 * Author:  Tursunaliyev Abdulloh
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\former\ZTableWrapWidget;
use zetsoft\widgets\places\ZAmchartWidget;

echo ZAmchartWidget::widget([
        'config' => [
            'table'=>[
               'UZ' => ZTableWrapWidget::widget()
            ]
        ]
]);
