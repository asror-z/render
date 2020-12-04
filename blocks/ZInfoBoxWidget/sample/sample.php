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

use rmrevin\yii\fontawesome\FA;
use zetsoft\widgets\blocks\ZInfoBoxWidget;

?>

<div class="row m-5">
    <div class="col-lg-4 col-md-3 col-sm-4">
        <?php
        echo ZInfoBoxWidget::widget([]);
        ?>

    </div>
    <div class="col-lg-3">
        <?php
        echo ZInfoBoxWidget::widget([
            'config' => [
                'infoBodyColor' => ZInfoBoxWidget::color['yellow'],
                'icon' => FA::_FOLDER,
                'elementColor' => '#ffffff',
                'infoValue' => '123',
                'infoText' => 'This info text',
            ]
        ]);
        ?>
    </div>
<!--    <div class="col-lg-3">-->
<!--        --><?php
//        echo ZInfoBoxWidget::widget([
//            'config' => [
//                'infoBodyColor' => ZInfoBoxWidget::color['cyan'],
//                'icon' => FA::_CAMERA,
//                'elementColor' => '#ffffff',
//                'infoValue' => '123',
//                'infoText' => 'This info text',
//            ]
//        ]);
//        ?>
<!--    </div>-->
    
</div>
