<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

//use zetsoft\widgets\former\ZListViewWidgetOld;


use zetsoft\dbitem\data\TabItem;
use zetsoft\widgets\former\ZJqueryStepsWidgetA;

$items = [];
$item = new TabItem();
$item->label = 'Add step';
$item->content = ' <p>
            <label for="title-3">HTML Title *</label><br />
            <input id="title-3" type="text"><br />
            <label for="text-3">HTML Content *</label><br />
            <textarea id="text-3" rows="5"></textarea>
        </p>
        <p><a href="javascript:void(0);" onclick="$(\'#wizard-4\').steps(\'add\', { title: $(\'#title-3\').val(), content: $(\'#text-3\').val() });">Add</a></p>
        <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Insert step';
$item->content = '<p>
            <label for="position-3">Position (zero-based) *</label><br />
            <input id="position-3" type="text"><br />
            <label for="title2-3">HTML Title *</label><br />
            <input id="title2-3" type="text"><br />
            <label for="text2-3">HTML Content *</label><br />
            <textarea id="text2-3" rows="5"></textarea>
        </p>
        <p><a href="javascript:void(0);" onclick="$(\'#wizard-4\').steps(\'insert\', Number($(\'#position-3\').val()), { title: $(\'#title2-3\').val(), content: $(\'#text2-3\').val() });">Insert</a></p>
        <p>(*) Mandatory</p>';
$items[] = $item;
$item = new TabItem();
$item->label = 'Remove step';
$item->content = ' <p>
            <label for="position2-3">Position (zero-based) *</label><br />
            <input id="position2-3" type="text">
        </p>
        <p><a href="javascript:void(0);" onclick="$(\'#wizard-4\').steps(\'remove\', Number($(\'#position2-3\').val()));">Remove</a></p>
        <p>(*) Mandatory</p>';
$items[] = $item;

echo ZJqueryStepsWidgetA::widget([
    'config' => [
        'enableAllSteps' => ZJqueryStepsWidgetA::enableAllSteps['true'],
        'enablePagination' => ZJqueryStepsWidgetA::enablePagination['false'],
    ],
    'data' => $items,

]);
