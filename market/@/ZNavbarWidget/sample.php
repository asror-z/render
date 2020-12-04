<?php
use \zetsoft\widgets\market\ZNavbarWidget;



echo ZNavbarWidget::widget([
    'config' => [
        "languages" => [
            ['label'=>'brazilya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-bra.png', 'active'=>false],
            ['label'=>'germaniya', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-ger.png', 'active'=>true],
            ['label'=>'english', 'rasm'=>'/render/market2/ZNavbarWidget/asset/assets/img/fl-eng.png', 'active'=>false],
        ]
    ]
]);
