<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\bozor\ZRegModal;
use zetsoft\widgets\bozor\ZRegModalX;
use zetsoft\widgets\incores\ZGrapesCheckboxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZHInputWidget;

/*echo ZRegModalX::widget([]);*/

?>
<div>

<div>

</div>
<?php

   echo ZButtonWidget::widget([

    'config' => [
        'btnRounded' => false,
        'text' => 'Вход',
        'url' => '#',
    ],
]);

?>

<?php
echo ZButtonWidget::widget([

    'config' => [
        'text' => 'регистрация',
        'btnRounded' => false,
        'url' => '#',
    ],
]);
?>
<div>

    <?php

    echo ZInputWidget::widget([

        'config' => [
            'type' => ZInputWidget::type['email'],
            'class' => 'border w-25',
            'label' => 'email',
        ]

    ]);

    ?>

</div>

    <div>

        <?php

        echo ZInputWidget::widget([

            'config' => [
                'type' => ZInputWidget::type['password'],
                'class' => 'border w-25',
                'label' => 'password',
            ]

        ]);

        ?>

    </div>

    <div class="d-flex w-25">
            <?php
            echo ZGrapesCheckboxWidget::widget([
                'config' => [

                ]
            ]);
            ?>
            <span><a href="#">забыли пароль?</a></span>
    </div>

    <div class="ml-4">
        <?php
        echo ZButtonWidget::widget([

            'config' => [
                'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
                'btnRounded' => false,
                'text' => 'Войти',
                'url' => '#',
            ],
        ]);

        ?>
    </div>

    <span class="d-flex">
        <hr style="width: 10%">
        <p>или</p>
        <hr style="width: 10%">
    </span>



    <div>
        <?php

        echo ZButtonWidget::widget([

            'config' => [
                'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
                'btnRounded' => false,
                'text' => 'Войти по Vendor',
                'url' => '#',
            ],
        ]);

        ?>
    </div>

</div>





