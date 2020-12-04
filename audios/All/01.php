<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 * Abdurakhmonov Umid
 *
 * render/audios/ZGspeechWidget
 * render/audios/ZPlayersPlyrWidget
 * render/audios/ZSpeakerWidget
 */

use zetsoft\widgets\audios\ZGspeechWidget;
use zetsoft\widgets\audios\ZPlyrWidget;
use zetsoft\widgets\audios\ZSpeakerWidget;

?>

    <div class="row">
        <div class="col">
            <?
            /*echo ZGspeechWidget::widget([]);*/
            ?>
        </div>

    </div>

<?

?>

    <div class="row">
        <div class="col">
            <?
            /*echo ZPlayersPlyrWidget::widget([]);*/

            ?>
        </div>

    </div>

<?

?>

    <div class="row">
        <div class="col">
            <?
            echo ZSpeakerWidget::widget ([
                'config' => [
                    'type' => ZSpeakerWidget::type['Russian Female'],
                    'icon' => '/render/audios/assets/audio/responciveVoice/rupor.png',
                    'bg_color' => '#000000',

                ]
            ]);

            ?>
        </div>

    </div>

<?
