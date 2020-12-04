<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\market\ZMSearchWidget;

require Root . '/blocks/navbar/navbar.php';
echo ZSidebarWidget::widget([]);

echo ZMSearchWidget::widget();
