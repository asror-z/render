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
use zetsoft\widgets\places\ZAmchartWidget;


echo ZAmchartWidget::widget([
    'config' => [
       // 'isRandom' => true,
        'table' => [
            'UZ' => ZTableWrapWidget::widget(),
            'RU' => ZTableWrapWidget::widget(),
        ],
    ]
]);

