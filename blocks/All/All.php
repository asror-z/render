<?php

use zetsoft\widgets\blocks\ZElfinderWidget;
use zetsoft\widgets\blocks\ZFooterChatBtnWidget;
use zetsoft\widgets\blocks\ZInfoBoxWidget;
use zetsoft\widgets\charts\ZXYChartWidget;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

 ?>

<div class="row" style="margin-bottom: 100px">
    <div class="col">
        <?php
        echo ZElfinderWidget::widget([
            'config' => [
                'type' => ['text/x-php', 'text/html']
            ]
        ]);

        ?>
    </div>
</div>


<!--<div class="row">
    <div class="col">
        <?php
/*        echo ZFooterChatBtnWidget::widget([]);

        */?>
    </div>
</div>-->

<div class="row" style="margin-bottom: 100px; ">
    <div class="col">
    <?php
        echo ZInfoBoxWidget::widget([
        'config' => [
        'infoBodyColor' => ZInfoBoxWidget::color['yellow'],
        'elementColor' => '#ffffff',
        'infoValue' => '123',
        'infoText' => 'This info text',
        ]
        ]);
        ?>
    </div>
</div>
