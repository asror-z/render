<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 * render/iconers/ZEvaIconWidget
 * render/iconers/ZFlagIconWidget
 * render/iconers/ZKonpaIconDeviconWidget
 * render/iconers/ZLangPickerWidget
 * Abdurakhmonov Umid
 *
 */

use zetsoft\widgets\iconers\ZEvaIconWidget;
use zetsoft\widgets\iconers\ZFlagIconWidget;
use zetsoft\widgets\iconers\ZKonpaIconDeviconWidget;
use zetsoft\widgets\iconers\ZLangPickerWidget;

?>

    <div class="row">
        <div class="col">
<?
            echo ZEvaIconWidget::Widget([
            ]);
?>
        </div>

    </div>

<?

?>

    <div class="row">
        <div class="col">
<?
            echo ZFlagIconWidget::widget([


            ]);
?>

        </div>

    </div>

<?

?>

    <div class="row">
        <div class="col">
<?
            echo ZKonpaIconDeviconWidget::widget([]);
?>
        </div>

    </div>

<?

?>

    <div class="row">
        <div class="col">
<?
        echo ZLangPickerWidget::widget([]);
?>

        </div>

    </div>

<?
