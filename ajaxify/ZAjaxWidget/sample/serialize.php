<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

?>

    <form id="form" action="" method="post">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        family: <input type="text" name="family"><br>

        <?php
        echo ZButtonWidget::widget([
            'id' => 'secondary',
            'config' => [
                'btnType' => ZButtonWidget::btnType['button'],
                'text' => Az::l('Сохранить'),
            ],
            'event' => [
                'click' => <<<JS
       function(e) {
            ajaxSerialize('/core/tester/test/return.aspx');
       }
JS
            ]

        ]);
        ?>

    </form>

<?php

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxSerialize',
        'data' => [
            's' => "formIdValue"
        ],
        'type' => ZAjaxWidget::type['post']
    ],
    'event' => [
        'success' => <<<JS
            function (text) {
                console.log(result);
                alert(data);
            }
JS,

    ],

]);
