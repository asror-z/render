<?php

use zetsoft\widgets\market\ZAliExMenuWidget;
use zetsoft\widgets\market\ZMenuWidget;
use zetsoft\dbitem\wdg\MenuItem;

   ?>

   <div class="row">
        <div class="col-md-3">
            <?
            echo ZAliExMenuWidget::widget([
                'config' => [
                    'mode' => ZAliExMenuWidget::mode['shop'],
                    'name' => "All Categories",
                    'isAll' => true,
                    'names' => [

                        'user',

                    ],
                    'col_number' => 4,
                    'open' => false
                ]
            ]);

            ?>

        </div>
   </div>
