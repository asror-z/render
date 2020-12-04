<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 * Abdurakhmonov Umid
 *
 */


/* render/images/ZHImgWidget
render/images/ZLightGalleryWidget
render/images/ZNanoGalleryWidget
render/images/ZSlickNewWidget
 *
 * */

use zetsoft\widgets\images\ZHImgWidget;
use zetsoft\widgets\images\ZLightGalleryWidget;
use zetsoft\widgets\images\ZNanoGalery2Widget;
use zetsoft\widgets\images\ZSlickWidget;

?>

    <div class="row">
        <div class="col">
            <?
            echo ZHImgWidget::widget();

            ?>

        </div>
    </div>
<?

?>
    <div class="row">
        <div class="col">
            <?
            echo ZLightgalleryWidget::widget([

            ]);

            ?>

        </div>
    </div>
<?

?>
    <div class="row">
        <div class="col">
            <?
             echo ZNanoGalery2Widget::widget([
                 //'data' => ''
             ]);

            ?>
        </div>
    </div>
<?

?>
    <div class="row">
        <div class="col">
            <?
            echo ZSlickWidget::widget([
                'data' =>[
                    9 => "d:/Develop/Projects/ALL/asrorz/zetsoft/exweb/eyuf/image/\profile.png",
                    10 => "d:/Develop/Projects/ALL/asrorz/zetsoft/exweb/eyuf/image/\unblock.png",
                    11 => "d:/Develop/Projects/ALL/asrorz/zetsoft/exweb/eyuf/image/\unnamed.png"
                ]
            ]); 
            ?>
        </div>
    </div>

<?


