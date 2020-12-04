<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\inptest\ZSelectable2Widget;

echo ZSelectable2Widget::widget([
       'config' => [
           'items' => [],
           'containerClass' => 'ul',
           'itemTag' => 'li',
           'itemClass' => 'ui-selectable',
           'selectableVar' => 'selectable',
           'appendTo' => 'selectable-container',
           'multiple' => true,
           'lassoSelect' => ZSelectable2Widget::Lasso['lasso select normal'],
           'tolerance' => ZSelectable2Widget::Tolerance['tolerance fit'],
       ]
]);
