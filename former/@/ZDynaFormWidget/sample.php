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

use zetsoft\dbitem\data\Form;
/*use zetsoft\widgets\former\ZDynaArrayGridWidget;*/
use zetsoft\widgets\former\ZDynaFormGridWidget;  

$forms = [];

$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;

$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;
$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;
$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;

/*$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;

$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;

$form = new Form();
$form->title = 'title1';
$form->value = 'value1';

$forms[] = $form;*/


echo ZDynaFormGridWidget::widget([
    'data' => $forms
]);
