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
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\former\ZDynaArrayGridWidget;
use zetsoft\widgets\former\ZDynaFormGridWidget;


$forms = [];

$form = new Form();
$form->title = 'name';
$form->value = 'value1';

$forms[] = $form;

$form = new Form();
$form->title = 'name';
$form->value = 'value1';

$forms[] = $form;
$form = new Form();
$form->title = 'name';
$form->value = 'value1';

$form = new Form();
$form->title = 'name';
$form->value = 'value1';



$form = new Form();
$form->title = 'title1';
$form->value = 'value1';
$forms[] = $form;



$form = new Form();
$form->title = 'title1';
$form->value = 'value1';



$form = new Form();
$form->title = 'title1';
$form->value = 'value1';




$model = User::find()->all();
$query = new ZArrayQuery();
$query->from($model);


// adjust the query by adding the filters
$query->andFilterWhere([
    'id' => 1
]);

echo ZDynaFormGridWidget::widget([
    'data' => $forms
]);



