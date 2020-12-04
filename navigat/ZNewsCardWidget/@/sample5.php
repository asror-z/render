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
use zetsoft\widgets\navigat\ZNewsCardWidget5;

$datas = News::find()->all();
?>



    <div class="navbar">
        <?
           echo ZNewsCardWidget5::widget([
           /*'config' => [
            'type' => ZNewsCardWidget2::type['']
           ]*/
           ]);
        ?>

    </div>

    


