<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\eyuf\ProgramForm;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidget;

$model = new ProgramForm();
$action->title = Azl . 'Статистика в формате стран по программам';
/** @var ZView $this */
$data = Az::$app->App->eyuf->main->formByCountries($model);

$model = new EyufDocument();
$clone = ZCheckButtonWidget::widget([
    'config' => [
        'url' => '/',
        'class' => 'simple-' . 1344,
        'message' => Az::l("Вы хотите клонировать этот элемент(ы)?"),
    ]
]);


echo ZDynaWidget::widget([
    'config' => [
     'url' => '',
    ]
]);
  
