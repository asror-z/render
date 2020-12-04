<?php
/**
 * @author Muminov Umid
 */
use zetsoft\widgets\inputes\ZLangSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2AWidget;

?>
<div class="col-md-3">
    <?php

    $data = [
        'uz' => 'Uzbekistan',
        'ad' => 'Andora',
        'ae' => 'United Arab Emirates',
        'af' => 'Afganistan',
    ];

    echo ZLangSelect2Widget::widget([
          'data' => $data
    ]);

    ?>
</div>
