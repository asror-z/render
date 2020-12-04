<?php

use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\market\ZMessageBoxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

/*
 * Template
 * /render/market/XeMart%20-%20Ecommerce%20Template/html/12-terms-condition.html
 * */
Az::$app->controller->layout = 'bozorMain';
?>


 <div class="container">
 <div class="row">
 <div class="col-md-7">
<?php
echo ZButtonWidget::widget([
    'config' => [
        'text' => 'Выходящие',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
        'class' => 'text-white',
        'btnRounded' => false,
        'blank' => false,
    ],
]);

echo ZButtonWidget::widget([
    'config' => [
        'btnType' => ZButtonWidget::btnType['button'],
        'text' => 'Отправление',
        'btnStyle' => ZButtonWidget::btnStyle['btn-light'],
        'class' => 'text-black',
        'btnRounded' => true,
    ],
]);


 echo ZMessageBoxWidget::widget();
?>
 </div>
 <div class="col-md-5">
     <div class="border" style="padding: 25px">
         <p><strong>Не нашли, что искали?</strong></p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero asperiores officia ratione, blanditiis nobis.</p>
            <br>
         <p><strong>Введите свой сообщение</strong></p>
         <textarea id="textarea" rows="10" cols="55"></textarea>
         <div class="text-center">
         <?php
         echo ZButtonWidget::widget([
             'config' => [
                 'text' => 'Выходящие',
                 'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
                 'class' => 'text-white',
                 'btnRounded' => false,
                 'blank' => false,
                 'btnSize' => 'btn-lg',
             ],
         ]);
         ?>
         </div>
     </div>
 </div>
 </div>
 </div>
