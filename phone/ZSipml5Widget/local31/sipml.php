<div class="container">
    <div class="row">

        <?php

        use zetsoft\widgets\notifier\ZJspanelWidgetWebphone;

        ZJspanelWidgetWebphone::begin([
            'grapesWrap' => false,
            'config' => [
                'id' => 'jspanel',
                'begin' => true,
                'height' => '60vh',
                'width' => '30vw',
                'my' => 'center',
                'at' => 'center',
                'autoposition' => 'down',
                'offsetX' => '-40',
                'offsetY' => '0',
                'headt' => ''
            ]
        ]);

        ?>

        <video class="video bg-dark position-relative w-100" style="opacity: 0"
               id="video_remote" autoplay="autoplay">

        </video>


        <video class="video bg-dark position-absolute" controls style="width: 32%; opacity: 0; top: 21rem"
               id="video_local" autoplay="autoplay" muted="true"></video>

        <div id="divCallCtrl" class="p-0 m-0">
            <div id="tdVideo" class="tab-video">
                <div id="divVideo" class='div-video'>

                </div>
            </div>
            <div id='divCallOptions' class='call-options text-center'>
                <button class="btn px-3 py-2 " id="btnFullScreen" disabled onclick='toggleFullScreen();'><i
                        class="fas fa-compress"></i></button>
                <button class="btn px-3 py-2 " id="btnMute" onclick='sipToggleMute();'><i
                        class="fas fa-microphone-slash"></i></button>
                <button class="btn px-3 py-2 " id="btnHoldResume" onclick='sipToggleHoldResume();'><i
                        class="fas fa-phone"></i></button>
                <button class="btn px-3 py-2 " id="btnTransfer" onclick='sipTransfer();'><i
                        class="fas fa-random"></i></button>
                <button class="btn px-3 py-2 " id="btnKeyPad" onclick='openKeyPad();'><i
                        class="far fa-keyboard"></i></button>
            </div>

        </div>

        <div id='divGlassPanel' class='glass-panel'></div>


        <!-- Call button options -->
        <!--<ul id="ulCallOptions" class="dropdown-menu invisible">
            <li><a href="#" onclick='sipCall("call-audio");'>Audio</a></li>
            <li><a href="#" onclick='sipCall("call-audiovideo");'>Video</a></li>
            <li id='liScreenShare'><a href="#" onclick='sipShareScreen();'>Screen Share</a></li>
            <li class="divider"></li>
            <li><a href="#" onclick='uiDisableCallOptions();'><b>Disable these options</b></a></li>
        </ul>-->


        <?php


        ZJspanelWidgetWebphone::end();
        ?>



    </div>


</div>
