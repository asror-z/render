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


use zetsoft\widgets\navigat\ZAccordionTrueCodesWidget;

$data = [
    ['Item1','Some text will be here'],
    ['Item2','Some text will be here'],
    ['Item3','Some text will be here'],
    ['Item4','Some text will be here'],
    ['Item5','Some text will be here'],
];

echo ZAccordionTrueCodesWidget::widget([
    'data' => $data
]);
