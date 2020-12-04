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


use zetsoft\models\news\News;
use zetsoft\widgets\navigat\ZNewsCardWidget;

$datas = News::find()->all();
?>                        +

<div class="row">

    <div class="col-md-3">
        <?
           echo ZNewsCardWidget::widget([]);
        ?>

    </div>
    <div class="col-md-3">

        <?

        echo ZNewsCardWidget::widget([]);

        ?>

    </div>
    <div class="col-md-3">

        <?

        echo ZNewsCardWidget::widget([]);

        ?>

    </div>
    <div class="col-md-3">

        <?

        echo ZNewsCardWidget::widget([]);

        ?>

    </div>

</div>

