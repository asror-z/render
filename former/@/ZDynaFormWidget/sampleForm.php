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

use zetsoft\former\eyuf\RavshanForm;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\actives\ZModel;
use zetsoft\widgets\former\ZDynaArrayGridWidget;
use zetsoft\widgets\former\ZDynaFormGridWidget;


$forms = [];

$form = new RavshanForm();
$form->name = 'name';
$form->password = 'value1';
$form->email = 'value1';

$forms[] = $form;

$form = new RavshanForm();
$form->name = 'name';
$form->password = 'value1';
$form->email = 'value1';

$forms[] = $form;

$form = new RavshanForm();
$form->name = 'name';
$form->password = 'value1';
$form->email = 'value1';

$forms[] = $form;


$model = User::find()->all();
$query = new ZArrayQuery();
$query->from($model);


// adjust the query by adding the filters
$query->andFilterWhere([
    'id' => 1
]);




