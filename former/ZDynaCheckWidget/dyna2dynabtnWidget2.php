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
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckConfirmWidget2OLD;
use zetsoft\widgets\former\ZDynaWidget2;

$action->title = Azl . 'Статистика в формате стран по программам';
/** @var ZView $this */

$model = new EyufDocument();
$clone = ZCheckConfirmWidget2OLD::widget([
    'config' => [
        'url' => '/',
        'class' => 'simple-' . 1,
        'message' => Az::l("Вы хотите клонировать этот элемент(ы)?"),
    ]
]);
echo ZDynaWidget2::widget([
    'model' => $model,
    'config' => [

        'toolbar' => [
            [
                'content' => $clone,
            ]
        ]
    ]


]);

