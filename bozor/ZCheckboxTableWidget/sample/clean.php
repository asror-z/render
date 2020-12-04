<?php

use zetsoft\models\user\ChatGroup;
use zetsoft\widgets\former\ZDynaWidget;


    echo ZDynaWidget::widget([
            'model'=> new \zetsoft\models\chat\ChatGroup()
    ]);
