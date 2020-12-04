

<?php
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\animo\ZChatMmenuWidget;
use zetsoft\widgets\menus\ZMMmenuChatWidget;
use zetsoft\widgets\message\chates\ZChatUsersLIst;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\message\chates\ZUserMessageWidget;
 ?>


<div class="container-fluid">

    <div class="card blue-gradient rare-wind-gradient chat-room">
        <div class="card-body">

            <!-- Grid row -->
            <div class="row px-lg-2 px-2">

                <!-- Grid column -->
                <div class="col-md-6 col-xl-4 px-0">






                    <?php

                    Az::$app->forms->zPjax->begin();
                    ?>


                    <?php
                        echo ZChatMmenuWidget::widget();
                    ?>



                    <?php
                    Az::$app->forms->zPjax->end();
                    ?>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">

                    <div class="chat-message">

                        <?php

                        Az::$app->forms->zPjax->begin();
                        ?>


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

                        <div class="text-right">

                        <?php
                        echo ZButtonWidget::widget([
                            'config' => [

                                'btnSize' => ZButtonWidget::btnSize['btn-sm'],
                                'icon' => FA::_SYNC,
                                'color'=>'text-white',
                                'url' => ZUrl::current(),
                                'ttSide'=>ZButtonWidget::ttSide['right'],
                            ]
                        ]);

                        ?>
                        </div>

                        <?php
/*                        Az::$app->forms->zPjax->end();
                        */?><!--
                            --><?php
/*                            Az::$app->forms->zPjax->begin();
                            */?>
                        <div class="d-flex">
                        <div class="messageBlog">

                            <div class="form-group basic-textarea">
                                <textarea class="form-control pl-2 my-0 messageBlog w-100" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..." ></textarea>


                   </div class="form-group basic-textarea">

                        </div>
                            <div class="input-group-text bg-transparent border-0">
                                <?php
                                echo ZButtonWidget::widget([
                                    'config' => [

                                        'iconSize' => ZButtonWidget::iconSize['2x'],
                                        'icon' => FA::_PAPER_PLANE,
                                        'url' => ZUrl::current(),

                                    ]
                                ]);

                                ?>

                            </div>
                        </div>
                            <?php
                            Az::$app->forms->zPjax->end();
                            ?>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
    </div>

</div>

<style>
    .card.chat-room .members-panel-1,
    .card.chat-room .chat-1 {
        position: relative;
        overflow-y: scroll; }

    .card.chat-room .members-panel-1 {
        height: 570px; }

    .card.chat-room .chat-1 {
        height: 495px; }

    .card.chat-room .friend-list li {
        border-bottom: 1px solid #e0e0e0; }
    .card.chat-room .friend-list li:last-of-type {
        border-bottom: none; }

    .scrollbar-light-blue::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px; }

    .scrollbar-light-blue::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5; }

    .scrollbar-light-blue::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #82B1FF; }

    .rare-wind-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
        background-image: -webkit-linear-gradient(bottom, #a8edea 0%, #fed6e3 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%); }
    #w2 i:hover{
       opacity: 0.5;
    }
    #w0 i:hover{
        opacity: 0.5;
    }

    .messageBlog{
    width:90%;
    height: 60px !important;
    min-height: 15px;
    overflow-y: hidden;
    }

        
</style>

<script>


        new Mmenu("#menu2", {
            extensions: {
                all: ["theme-white", "pagedim-black"],
                "(max-width: 767px)": ["fx-menu-slide"]
            },
            counters: !0,
            iconPanels: {
                add: !0,
                hideDivider: !0,
                hideNavbar: !0,
                visible: "first"
            },
            navbar: {
                title: "mmenu"
            },
            navbars: [{
                position: "top",
                content: ["searchfield"]
            }, {
                position: "top"
            }],
            setSelected: {
                hover: !0,
                parent: !0
            },
            sidebar: {
                collapsed: {
                    use: 768,
                    hideNavbar: !0,
                    hideDivider: !0
                },
                expanded: {
                    use: 1440,
                    initial: "remember"
                }
            }
        }, {
            offCanvas: {
                page: {
                    selector: "#page"
                }
            },
            searchfield: {
                clear: !0
            }
        });


    

</script>

