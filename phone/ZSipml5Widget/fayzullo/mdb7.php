<?php
?>
<html lang="en">
<head>

<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <meta charset="UTF-8">-->
<!--    <title>btn</title>-->

    <script src="release/SIPml-api.js" type="text/javascript"> </script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--     Material Design Bootstrap -->
    <link href="/render/asrorz/mdb/css/mdb.css" rel="stylesheet">


</head>
<style>
    .tab-video,
    .div-video {
        width: 100%;
        height: 0px;
        -webkit-transition-property: height;
        -moz-transition-property: height;
        -o-transition-property: height;
        -webkit-transition-duration: 2s;
        -moz-transition-duration: 2s;
        -o-transition-duration: 2s;
    }

    .previewvideo {
        position: absolute;
        width: 88px;
        height: 72px;
        margin-top: -75px;
    }

    .video_panel{
        position: relative;
        top: 150px;
        z-index: -2;
        transition: .3s all ease-in;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 1px;
    }
    .video_panel.active_left{
        top: -35px;
        z-index: 0;

    }
    .tab-video{
        transition: .3s all ease-in;
    }
    .tab-video.active_bot{
        border: 1px solid #000;
    }

    .call-options{
        opacity: 0;
        height: 0;
    }
    .call-options.option_active{
        opacity: 1;
        height: auto;
    }

    .call-options .btn{
        padding: 0.84em 1.2em;
    }
</style>

<body>
<div class="container-fluid"> <!-- class="container-xl container-lg container-md container-sm" container nado-->
    <div class=" col-lg-3 col-md-5 col-sm-8 ml-auto col-"> <!--col-lg-4 col-md-5 col-sm-8 ml-auto col- podhodit-->
        <!--        <button id="res_btn" class="res_btn btn btn-success"><i class="fas fa-phone-volume"></i></button>-->
        <div class="main_block ">
            <div class="block_item or2">
                <div class="video_panel">
                    <div>
                        <div id="divCallCtrl" class="span7 well table align-middle">
                            <label class="w-100 align-middle" id="txtCallStatus1">          <!--id="txtCallStatus"-->
                            </label>
                            <label class="w-100 align-middle" id="txtRegStatus1"></label>       <!--id="txtRegStatus"-->
                            <br />
                            <table class="w-100 d-none" >
                                <tr class="invisible" >
                                    <td >
                                        <input type="text" class="w-100 h-100" id="txtPhoneNumber1" value=""  />      <!--id="txtPhoneNumber"-->
                                    </td>
                                </tr>
                                <tr class="invisible">
                                    <td colspan="1" align="right">
                                        <div class="btn-toolbar m-0 align-middle" >
                                            <div id="divBtnCallGroup" class="btn-group">
                                                <button id="btnCall" disabled class="btn btn-primary" data-toggle="dropdown">Call</button>
                                            </div>&nbsp;&nbsp;
                                            <div class="btn-group">
                                                <input type="button" id="btnHangUp1" class="btn btn-primary m-0 align-middle h-100" value="HangUp" onclick='sipHangUp();' disabled />   <!--id="btnHangUp"-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                            <div id="tdVideo"  class="tab-video">
                                <div id="divVideo" class='div-video'>
                                    <div id="divVideoRemote" class="position-relative h-100 w-100 opacity-1">
                                        <video class="video opacity-0 bg-dark" width="100%" height="100%" id="video_remote" autoplay="autoplay" style="-webkit-transition-property: opacity; -webkit-transition-duration: 2s;"></video>
                                    </div>

                                    <div id="divVideoLocalWrapper" class="ml-0 border border-dark" >
                                        <iframe class="previewvideo border border-dark" > </iframe>
                                        <div id="divVideoLocal" class="previewvideo border border-dark">
                                            <video class="video opacity-0 bg-dark"  width="100%" height="100%" id="video_local" autoplay="autoplay" muted="true" style=" -webkit-transition-property: opacity; -webkit-transition-duration: 2s;"></video>
                                        </div>
                                    </div>
                                    <div id="divScreencastLocalWrapper" class="ml-90 border border-dark">
                                        <iframe class="previewvideo border border-0 border-dark z-index-1000" > </iframe>
                                        <div id="divScreencastLocal" class="previewvideo border border-0 border-dark z-index-1000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id='divCallOptions' class='call-options mt-2 ml-auto mr-auto ' >
                                <button class="btn" id="btnFullScreen" disabled onclick='toggleFullScreen();'><i class="fas fa-compress"></i></button>
                                <button class="btn" id="btnMute" onclick='sipToggleMute();'><i class="fas fa-microphone-slash"></i></button>
                                <button class="btn" id="btnHoldResume" onclick='sipToggleHoldResume();'><i class="fas fa-phone"></i></button>
                                <button class="btn" id="btnTransfer" onclick='sipTransfer();'><i class="fas fa-random"></i></button>
                                <button class="btn" id="btnKeyPad" onclick='openKeyPad();'><i class="far fa-keyboard"></i></button>
                            </div>

                        </div>
                    </div>
                    <div class="container d-none">
                        <div class="row-fluid">
                            <div class="span4 well">
                                <table style='width: 100%'>
                                    <tr>
                                        <td>
                                            <input type="text" style="width: 100%; height: 100%" id="txtDisplayName" value="" />
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <input type="text"  id="txtPrivateIdentity" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"  id="txtPublicIdentity" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="password"  id="txtPassword" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text"  id="txtRealm" value=""  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input type="button" class="btn btn-success" id="btnRegister" value="LogIn" disabled onclick='sipRegister();' />
                                            <input type="button" class="btn btn-danger" id="btnUnRegister" value="LogOut" disabled onclick='sipUnRegister();' />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <footer>
                            <object id="fakePluginInstance" classid="clsid:69E4A9D1-824C-40DA-9680-C7424A27B6A0" style="visibility:hidden;"> </object>

                        </footer>
                    </div>
                    <!-- /container -->
                    <!-- Glass Panel -->
                    <div id='divGlassPanel' class='glass-panel invisible'></div>


                    <!-- Call button options -->
                    <ul id="ulCallOptions" class="dropdown-menu invisible" >
                        <li><a href="#" onclick='sipCall("call-audio");'>Audio</a></li>
                        <li><a href="#" onclick='sipCall("call-audiovideo");'>Video</a></li>
                        <li id='liScreenShare'><a href="#" onclick='sipShareScreen();'>Screen Share</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick='uiDisableCallOptions();'><b>Disable these options</b></a></li>
                    </ul>

                </div>

                <div class="right_block">
                    <div class="opacity mt-3">
                        <div class="number text-center white-text elegant-color-dark border w-10">
                            <div class="mb-2 mt-2 control_btn">
                                <button id="callBtn" class="btn btnCall  btn-floating" title="Call" onclick='sipCall("call-audio");'><i class="fa fa-phone"></i></button>
                                <button id="videoBtn" class="btn  btn-floating" onclick='sipCall("call-audiovideo");'><i class="fas success-ic fa-video"></i></button>
                                <button class="btn btnHangUp  hangupBtn btn-floating" id="btnHangUp" title="Hangup" onclick='sipHangUp();'><i class="fas red-ic  fa-phone-slash"></i></button>
                            </div>
                            <div class="ml-4 mr-4">
                                <div id="txtCallStatus"class="h-25" ></div>
                                <div id="txtRegStatus" ></div>

                                <div class=" md-form input-with-post-icon mt-lg-1">
                                    <i class=" fas white-ic fa-user input-prefix text-center "></i>
                                    <input type="text" id="txtPhoneNumber" class="form-control text-white text-center">
                                    <label for="txtPhoneNumber"></label>
                                </div>
                            </div>
                            <div class=" buuton-goup mb-lg-4 mb-3">
                                <a type="button" class="btn-floating elegant-color" value="1" onclick="dis('1')">1</a>
                                <a type="button" class="btn-floating elegant-color" value="2" onclick="dis('2')">2</a>
                                <a type="button" class="btn-floating elegant-color" value="3" onclick="dis('3')">3</a>
                                <br>
                                <a type="button" class="btn-floating  elegant-color" value="4" onclick="dis('4')">4</a>
                                <a type="button" class="btn-floating elegant-color" value="5" onclick="dis('5')">5</a>
                                <a type="button" class="btn-floating elegant-color" value="6" onclick="dis('6')">6</a>
                                <br>
                                <a type="button" class="btn-floating elegant-color " value="7" onclick="dis('7')">7</a>
                                <a type="button" class="btn-floating elegant-color " value="8" onclick="dis('8')">8</a>
                                <a type="button" class="btn-floating elegant-color " value="9" onclick="dis('9')">9</a>
                                <br>
                                <a type="button" class="btn-floating elegant-color  " value="+" onclick="dis('+')">+</a>
                                <a type="button" class="btn-floating elegant-color " value="0" onclick="dis('0')">0</a>
                                <a type="button" class="btn-floating  elegant-color  " value="c" onclick="clr()">
                                    <i class="fas red-ic fa-backspace white-text "></i></a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

<script>
    //function for displaying values
    function dis(val) {
        document.getElementById("txtPhoneNumber").value += val
    }
    function clr() {
        document.getElementById("txtPhoneNumber").value = ""
    }

    $('btn-default').on("click",function (){
        console.log(this);
        document.getElementById("txtPhoneNumber").value +=  this.value;
    });

    $('#res_btn').click(function () {
        // $(this).preventDefault();
        $('.or2').toggleClass('res_active');
    });

    $('.out_phone').click(function () {
        $('.or2').removeClass('res_active');
    });



</script>



<!--*************-->


<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/jquery.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-alert.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-scrollspy.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-tab.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-popover.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-button.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/DoubangoTelecom/sipml5/master/assets/js/bootstrap-typeahead.js"></script>

<!--***** I am comment Audio for mdb7.php********-->

<!--<audio id="audio_remote" autoplay="autoplay"> </audio>-->
<!--<audio id="ringtone" loop src="sounds/ringtone.wav"> </audio>-->
<!--<audio id="ringbacktone" loop src="sounds/ringbacktone.wav"> </audio>-->
<!--<audio id="dtmfTone" src="sounds/dtmf.wav"> </audio>-->


<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-6868621-19");
        pageTracker._trackPageview();
    } catch (err) { }



    function uiVideoDisplayShowHide(b_show) {
        if (b_show) {
            //$('.call-options').addClass('option_active');
            tdVideo.style.height = '100%';
            divVideo.style.height = navigator.appName == 'Microsoft Internet Explorer' ? '100%' : '100%';
            $('.tab-video').addClass('active_bot');
            $('.video_panel').addClass('active_left');

        }
        else {
            // $('.call-options').removeClass('option_active');
            tdVideo.style.height = '0px';
            divVideo.style.height = '0px';
            $('.tab-video').removeClass('active_bot');
            $('.video_panel').removeClass('active_left');


        }

        btnFullScreen.disabled = !b_show;
    }
</script>

<script type="text/javascript">
    setTimeout(function() {
        sipRegister();
    }, 3000);
</script>


<!--*************-->



</body>
</html>
