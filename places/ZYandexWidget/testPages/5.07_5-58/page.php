<?php

use zetsoft\widgets\places\ZYandexDbWidget;

?>

<div class="container" style="width:1000px ;">
    <div class="row">
        <?
        echo ZYandexDbWidget::widget([
            'config' => [
                'trafficControl' => true,
                'routeButtonControl' => true,
                'zoomControl' => true,
                'searchControl' => true,
                'typeSelector' =>  true,
                'geolocationControl' => true,
                'fullscreenControl' => true,
                'customControl' => true,
                'rulerControl' => true,

            ],
        ]);
        ?>
    </div>
</div>


