<?php

use zetsoft\widgets\blocks\ZCollapseWidget;

ob_start();
ob_implicit_flush(false);

$this->beginPage();
$this->head();
$this->beginBody();
echo ZCollapseWidget:: widget([

    'config' => [
        'links' => [
            'question'
        ],
        'contents' => [
            'answer'
        ],
    ]
]);
$this->endBody();
$this->endPage(true);
$style_script= Yii::$app->assetManager->getAssetUrl();
//$style_script= ob_get_clean();

//vdd($style_script);

