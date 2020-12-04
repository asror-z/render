
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="release/SIPml-api.js" type="text/javascript"> </script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--     Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/render/phone/ZSipml5Widget/fayzullo/asset/style.css">

</head>

<body>
<div>
    <div class="no_pad">
<!--        <button id="res_btn" class="res_btn btn btn-success"><i class="fas fa-phone-volume"></i></button>-->
        <div class="main_block ">
            <div class="block_item ">
                <div class="left_block"></div>
            </div>
            <div class="block_item or2">
                <div class="video_panel">
                    <div>
                        <div id="divCallCtrl" class="span7 well table align-middle">
                            <label class="w-100 align-middle" id="txtCallStatus1">          <!--id="txtCallStatus"-->
                            </label>
                            <label class="w-100 align-middle" id="txtRegStatus1"></label>       <!--id="txtRegStatus"-->
                            <br />
                            <table class="w-100 display-no" >
                                <tr class="invisible" >
                                    <td >
                                        <input type="text" class="w-100 h-100" id="txtPhoneNumber1" value="" placeholder="Enter phone number to call" />      <!--id="txtPhoneNumber"-->
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
                            <div id='divCallOptions' class='call-options opacity-0 mt-2' >
                                <button class="btn" id="btnFullScreen" disabled onclick='toggleFullScreen();'><i class="fas fa-compress"></i></button>
                                <button class="btn" id="btnMute" onclick='sipToggleMute();'><i class="fas fa-microphone-slash"></i></button>
                                <button class="btn" id="btnHoldResume" onclick='sipToggleHoldResume();'><i class="fas fa-phone"></i></button>
                                <button class="btn" id="btnTransfer" onclick='sipTransfer();'><i class="fas fa-random"></i></button>
                                <button class="btn" id="btnKeyPad" onclick='openKeyPad();'><i class="far fa-keyboard"></i></button>
                            </div>

                        </div>
                    </div>



                    <div class="container display-no">
                        <div class="row-fluid">
                            <div class="span4 well">
                                 </label>
                                <h2>
Registration
                                </h2>
                                <br />
                                <table style='width: 100%'>
                                    <tr>
                                        <td>
                                            <label style="height: 100%">
    Display Name:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 100%; height: 100%" id="txtDisplayName" value=""
                                                   placeholder="e.g. John Doe" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label style="height: 100%">
                                                Private Identity<sup>*</sup>:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 100%; height: 100%" id="txtPrivateIdentity" value=""
                                                   placeholder="e.g. +33600000000" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label style="height: 100%">
                                                Public Identity<sup>*</sup>:
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 100%; height: 100%" id="txtPublicIdentity" value=""
                                                   placeholder="e.g. sip:+33600000000@doubango.org" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label style="height: 100%">Password:</label>
                                        </td>
                                        <td>
                                            <input type="password" style="width: 100%; height: 100%" id="txtPassword" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label style="height: 100%">Realm<sup>*</sup>:</label>
                                        </td>
                                        <td>
                                            <input type="text" style="width: 100%; height: 100%" id="txtRealm" value="" placeholder="e.g. doubango.org" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input type="button" class="btn btn-success" id="btnRegister" value="LogIn" disabled onclick='sipRegister();' />
                                            &nbsp;
                                            <input type="button" class="btn btn-danger" id="btnUnRegister" value="LogOut" disabled onclick='sipUnRegister();' />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p class="small"><sup>*</sup> <i>Mandatory Field</i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <a class="btn" href="http://code.google.com/p/sipml5/wiki/Public_SIP_Servers" target="_blank">Need SIP account?</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <a class="btn" href="./expert.htm" target="_blank">Expert mode?</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <br>


                        <br />
                        <footer>

                            <p>
                                &copy; Doubango Telecom 2012-2018 <br />
                                <i>Inspiring the future</i>
                            </p>
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
                        <div class="number text-center border w-10">
                            <div class="mb-2 mt-2 control_btn">
                                <button id="callBtn" class="btn btnCall btn-default" title="Call" onclick='sipCall("call-audio");'><i class="fa fa-phone"></i></button>

                                <button id="videoBtn" class="btn btn-default" onclick='sipCall("call-audiovideo");'>
                                    <i class="fas success-ic fa-video"></i>
                                </button>

                                <button class="btn btnHangUp btn-default hangupBtn" id="btnHangUp" title="Hangup" onclick='sipHangUp();'>
                                    <i class="fas red-ic  fa-phone-slash"></i>
                                </button>
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
                                <a type="button" class="btn-floating btn-lg btn-default" value="1" onclick="dis('1')">1</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="2" onclick="dis('2')">2</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="3" onclick="dis('3')">3</a>
                                <br>
                                <a type="button" class="btn-floating btn-lg btn-default" value="4" onclick="dis('4')">4</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="5" onclick="dis('5')">5</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="6" onclick="dis('6')">6</a>
                                <br>
                                <a type="button" class="btn-floating btn-lg btn-default" value="7" onclick="dis('7')">7</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="8" onclick="dis('8')">8</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="9" onclick="dis('9')">9</a>
                                <br>
                                <a type="button" class="btn-floating btn-lg btn-default" value="+" onclick="dis('+')">+</a>
                                <a type="button" class="btn-floating btn-lg btn-default" value="0" onclick="dis('0')">0</a>
                                <a type="button" class="btn-floating btn-lg btn-secondary" value="c" onclick="clr()">
                                    <i class="fas red-ic fa-backspace"></i></a>

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

<!--*************-->

<audio id="audio_remote" autoplay="autoplay"> </audio>
<audio id="ringtone" loop src="sounds/ringtone.wav"> </audio>
<audio id="ringbacktone" loop src="sounds/ringbacktone.wav"> </audio>
<audio id="dtmfTone" src="sounds/dtmf.wav"> </audio>


<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-6868621-19");
        pageTracker._trackPageview();
    } catch (err) { }
</script>

<script type="text/javascript">
    setTimeout(function() {
        sipRegister();
    }, 3000);
</script>


<!--*************-->



</body>
</html>
