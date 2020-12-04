<?php

    use zetsoft\widgets\message\chates\ZUserMessageWidget;

    echo ZUserMessageWidget::widget([
        'config' => [
            'name'=>'Brad Pit',
            'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg',
            'time'=>'11:02',
            'text'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.',
            'mine' => false
        ]

    ]);
    ?>
