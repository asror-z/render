<?php

use rmrevin\yii\fontawesome\FA;
use zetsoft\models\user\UserFriend;
use zetsoft\system\Az;
use zetsoft\widgets\themes\ZFriendRequestsWidget;


?>
<div class="container row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6 ml-auto">


        <div class="vd_mega-menu-wrapper mr-2">
            <div class="vd_mega-menu pull-right">
                <ul class="mega-ul">

                    <?

                    $requests = UserFriend::find()
                        ->where([
                            'friend' => $this->userIdentity()->id,
                            'remove' => false,
                            'status' => 0,
                        ])
                        ->limit(20)
                        ->all();
                      //vdd($requests);
                    echo ZFriendRequestsWidget::widget([
                        'config' => [
                            'icon' => 'fas fa-'.FA::_USERS,
                            'title' => Az::l('Message'),
                        ]
                    ]);


                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>
