<?php

use zetsoft\widgets\actions\ZFilterWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget2;


?>
<div class="market-container">
    <?php
    echo ZFilterWidget::widget([
        'config' => [
            'selector' => '.material',
            'itemselector' => 'label',
        ]
    ]);

    echo ZMCheckboxGroupWidget::widget([
        'config' => [
            'class' => 'material',
        ],
        'data' => [
            1 => 'qora',
            2 => 'oq',
        ]
    ]);
    ?>
</div>



