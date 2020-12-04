<?php
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 * render/incores/ZCheckboxWidget
 * render/incores/ZDivRenderer
 * render/incores/ZFaqAccordionWidget
 * render/incores/ZLazyLoadingWidget
 * render/incores/ZMCheckboxWidget
 *
 */

use zetsoft\widgets\incores\ZICheckboxWidget;
use zetsoft\widgets\incores\ZLazyLoadingWidget;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;


?>

<div class="row">
    <div class="col">
        <?

        echo ZICheckboxWidget::widget();


        ?>
    </div>

</div>
<br>

  <div class="row">
        <div class="col">
            <?
               echo ZMaterialCheckboxWidget::widget();
            ?>
        </div>

    </div>
<br>

<div class="row">
    <div class="col">
        <?
        echo ZLazyLoadingWidget::widget();
        ?>
    </div>

</div>






