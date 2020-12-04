<div class="row">


    <?php

    use rmrevin\yii\fontawesome\FAS;

    use zetsoft\widgets\themes\ZBlockCardWidget;
    use zetsoft\widgets\themes\ZColWidget;




    ZColWidget::begin([
        'config' => [
            'width' => 3
        ]
    ]);
    echo ZBlockCardWidget::widget([

        'config' => [
            /*'title' => false,*/
            'text' => 'Фонд',
            /*'counter' => 29,*/
            'color' => ZBlockCardWidget::color['blue darken-2'],
            'cardfooterColor' => ZBlockCardWidget::color['cyan darken-3'],
            'badgeType' => ZBlockCardWidget::color['cyan darken-4'],
            /*'footerText' => 'More info',
            'icon' => 'fas fa-envelope',*/
            'cardWidth' => '100%',
        ]

    ]);



    ZColWidget::end();

    ?>



    <div class="col-lg-3 col-md-4 col-sm-6">
        <?php




        echo ZBlockCardWidget::widget([
            'config' => [
                /*'title' => '75',*/
                'text' => 'Министерство, учереждение или организация',
               /* 'counter' => 29,*/
                'color' => ZBlockCardWidget::color['green accent-4'],
                'cardfooterColor' => ZBlockCardWidget::color['cyan darken-3'],
                'badgeType' => ZBlockCardWidget::color['cyan darken-4'],
               /* 'footerText' => 'More info',*/
                /*'icon' => 'fas fa-envelope',*/
                'cardWidth' => '100%',
            ]

        ]);
        ?>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <?php



        echo ZBlockCardWidget::widget([
            'config' => [
               /* 'title' => '23',*/

                'text' => 'ВУЗ или Научно-иследовательское учреждение',
                /*'counter' => 29,*/

                'color' => ZBlockCardWidget::color['amber accent-4'],
                'cardfooterColor' => ZBlockCardWidget::color['amber darken-4'],
                'badgeType' => ZBlockCardWidget::color['red'],

                /*'footerText' => 'More info',*/
               /* 'icon' => 'fas fa-envelope',*/
                'cardWidth' => '100%',
            ]

        ]);
        ?>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <?php
        echo ZBlockCardWidget::widget([
            'config' => [
                /*'title' => '',*/
                'text' => 'Стипендиат',
               /* 'counter' => 29,*/
                'color' => ZBlockCardWidget::color['deep-orange darken-3'],
                'cardfooterColor' => ZBlockCardWidget::color['deep-orange darken-4'],
                'badgeType' => ZBlockCardWidget::color['red'],
                /*  'footerText' => 'More info',
                  'icon' => 'fas fa-envelope',*/
                'cardWidth' => '100%',
            ]

        ]);
        ?>
    </div>

</div>
