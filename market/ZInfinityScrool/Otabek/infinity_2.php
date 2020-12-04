<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;

echo ZInfinityScrollAjaxWidget::widget([
    'config' => [
        'requireUrl'=>'/render/cards/ZListViewWidget/demo/vertical_horizontal.php'
    ]
]);
?>
