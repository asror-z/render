<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\cards\ZProductCardWidget;

?>
<div class="row">
<div class="col-lg-3">
<?php

echo ZProductCardWidget::widget([
    'config'=>[
        'class' => 'btn-success'
        //'card-img' => ' ' ,
        //'name' => 'afsdfasdfasdf',
        //'price' => '$asfdsdfasdf00',
        //'price_old' =>'$6asdfasdfasd50'
    ]
]);

?>
</div>
</div>
