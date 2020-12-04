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

use zetsoft\widgets\audios\ZPlyrWidget;

?>

<div style="height: 70vh">

</div>

<div class="w-50">
    <?
        echo ZPlyrWidget::widget([
        'config' => [
            'type' => ZPlyrWidget::type['video'],
            'controls' => [
                'fullscreen',
            ],

        ]]);
    ?>
</div>

<?php



