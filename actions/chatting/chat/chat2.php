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

use zetsoft\widgets\message\chates\ZChatUsersLIst;
use zetsoft\widgets\message\chates\ZUserMessageWidget;

?>


<div class="card rare-wind-gradient chat-room">
    <div class="card-body">

        <!-- Grid row -->
        <div class="row px-lg-2 px-2">

            <!-- Grid column -->
            <div class="col-md-6 col-xl-4 px-0">

                <h6 class="font-weight-bold mb-3 text-center text-lg-left">Member</h6>

                    
                        <?php
                        echo ZChatUsersLIst::widget([
                            'config' => [
                                'name'=>'Sardor',
                                'status'=>'lastseen recently',
                                'tagtext'=>'Hello how are you',
                                'bage'=>2,
                                'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg' ,
                            ]
                        ]);

                        ?>


             

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">

                <div class="chat-message">

                    <ul class="list-unstyled chat-1 scrollbar-light-blue">
                        <?php
                        echo ZUserMessageWidget::widget([
                            'config' => [
                                'name'=>'Brad Pit',
                                'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg',
                                'time'=>'11:02',
                                'text'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.'
                                ,'layout'=>ZUserMessageWidget::type['layout'],
                                'mine' => false
                            ]

                        ]);
                        ?>
                        <?php
                        echo ZUserMessageWidget::widget([
                            'config' => [
                                'name'=>'Zetsoft',
                                'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg',
                                'time'=>'11:02',
                                'text'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.'
                                ,'layout'=>ZUserMessageWidget::type['layout'],
                                'mine' => true
                            ]
                        ]);

                        ?>
                        <?php

                        echo ZUserMessageWidget::widget([
                            'config' => [
                                'name'=>'Brad Pit',
                                'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg',
                                'time'=>'11:02',
                                'text'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.'
                                ,'layout'=>ZUserMessageWidget::type['layout'],
                                'mine' => false
                            ]

                        ]);
                        ?>
                        <?php
                        echo ZUserMessageWidget::widget([
                            'config' => [
                                'name'=>'Zetsoft',
                                'picture'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg',
                                'time'=>'11:02',
                                'text'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.'
                                ,'layout'=>ZUserMessageWidget::type['layout'],
                                'mine' => true
                            ]
                        ]);

                        ?>
                    </ul>
                    <div class="white">
                        <div class="form-group basic-textarea">
                            <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here...">
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-pink btn-rounded btn-sm waves-effect waves-dark float-right">Send</button>

                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
</div>


<style>
    .text-small strong{
    font-weight: initial;
    }
    .text-muted{
    font-weight: normal !important;
    }
    .text-smaller .text-muted  {
        font-weight: normal;
    }
    .primary-font{
        font-weight: 500;
    }
    .usertext{
        font-weight: normal !important;
    }
</style>
