<?php

use zetsoft\dbitem\App\eyuf\RecaptchaItem;

$item = new RecaptchaItem();
$item->site_key = '6Lc26t8UAAAAAFofGeFQJhMmHQR3OexuG3vgP5Ph';
$item->actionUrl = '';

echo $this->require( '/render/actions/ZRecaptchaWidget/ZCaptchaV2X.php',[
    'item' => $item
]);
