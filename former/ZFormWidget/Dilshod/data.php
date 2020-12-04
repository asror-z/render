<?php

use zetsoft\former\core\CoreServiceForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;

$model = new CoreServiceForm();
/** @var ZView  $this */
$form = $this->activeBegin();

echo ZFormWidget::widget([
    'model' => $model ,
    'form' => $form
]);

$this->activeEnd();
