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


use yii\data\ActiveDataProvider;
use zetsoft\models\news\News;
use zetsoft\widgets\navigat\ZNewsCardWidget4;

$id = $this->httpGet('id');
$datas = News::find()->limit(4)->all();
?>

<div class="container">
<div class="row">
    <div class="col-8">
        <div class="col-md-8">
                <div class="card ">
                    <div class="card-header bg-dark">
                        <h3 class="text-center text-light">So'ngi Yangiliklar </h3>
                     </div>
                    <div class="card-body text-decoration-none">
                    </div>
            <?php

            $title = News::find()->limit(4)->all();

            /** @var ActiveDataProvider $provider */

            foreach ($title as $t) {

                ?>


                    <?php
                    echo ZNewsCardWidget4::widget([
                        'config' => [
                            'type' => ZNewsCardWidget4::type['one'],
                            'title' => $t->title,
                             $t->image[0],
                        ]
                    ]);
                    }
                    ?>

                </div> </div>
                </div>
            </div>
    </div>
</div>



