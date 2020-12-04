<?php

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\former\test\TestDilshodForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;

$post = $this->httpPost('ZDynamicModel');

if (is_array($post))
{
    $this->sessionSet('filter', $post);
    $this->urlRefresh();
}

$filter_val = $this->sessionGet('filter');

Az::$app->cores->chess->id = 2;
Az::$app->cores->chess->run();
$model = Az::$app->cores->chess->dynamicModel;
$data = Az::$app->cores->chess->data;
$filter = Az::$app->cores->chess->filterModel;

if (is_array($filter_val))
    $filter->setAttributes($filter_val);

/*$filter->modelPost($filter);*/
$form = $this->activeBegin();
echo ZFormWidget::widget([
    'model' => $filter,
    'form' => $form
]);
 $this->activeEnd();
