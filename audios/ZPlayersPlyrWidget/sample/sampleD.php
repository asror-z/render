<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\audios\ZPlyrWidget;


echo ZPlyrWidget::widget([
    'config' => [
        'type' => ZPlyrWidget::type['audio'],
        //'audioPath' => '/upload/audioz/eyuf/call/2020/04/28/internal-202-202-20200428-162118-1588072874.106.wav'
    ],

]);


