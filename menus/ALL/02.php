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


/*
 *
render/menus/ZSidebarWidget
render/menus/ZSlideNavWidget
render/menus/ZSmartMenuWidget
 *
 * */



use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\menus\ZSlideNavWidget;
use zetsoft\widgets\menus\ZSmartMenuWidget;

?>

    <div class="row">
        <div class="col">
            <?
            echo ZSidebarWidget::widget([


            ]);

            ?>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <?
            echo ZSlideNavWidget::widget();


            ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
             <?
             echo ZSmartMenuWidget::widget([
                 'config' => [
                     'data' => [
                         'Item1' => '#',
                         'Item2' => '#',
                         'Item3' => [
                             'Item31' => '#',
                             'Item32' => '#',
                             'Item33' => '#'
                         ],
                         'Item4' => '#',
                     ]
                 ]

             ]);
             ?>
        </div>
    </div>

<?


