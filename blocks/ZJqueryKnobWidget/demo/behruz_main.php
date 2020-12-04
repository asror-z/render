
<!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
<script src="https://cdn.jsdelivr.net/npm/jquery-knob@1.2.11/dist/jquery.knob.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <br>

                <h4 id="current-session-type">Focus Time</h4>

                <div id="time-wrapper">
                    <div id="seconds-wrapper"><span style="display:none" >25</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #buttons-wrapper{
        display: none;
        position: relative;
        top: -20px;
    }

    /*#time-wrapper input#knob-minutes{*/
    /*    font-size: 42px !important;*/
    /*}*/
    .align-left{
        text-align: left !important;
    }
    .one-digit{
        margin-left: -110px !important;
    }
    .one-digit-minute{
        right: -15px !important;
    }
    .is_time_running{
        right: -2px !important;
    }
    #seconds-wrapper{
        visibility: hidden;
        position: relative;
        top: -130px;
        /*right: -25px;*/
        color: #00c851;
        font-weight: bold;
        font-style: normal;
        font-variant: normal;
        font-stretch: normal;
        font-size: 42px;
        line-height: normal;
        font-family: Arial;

    }
    #seconds-wrapper #time-colon{
        position: relative;
        top: -3px;
    }
    .time-length{
        margin-left: 10px;
        margin-right: 10px;
    }
    .time-length-indicators .glyphicon{
        color: #474747;
    }
    .time-length-indicators a:hover{
        text-decoration: none;
    }
    .time-length-indicators .col-md-6:first-of-type{
        padding-right: 50px;
    }
    .time-length-indicators .col-md-6:last-of-type{
        padding-left: 50px;
    }

    #project-name, #project-name a{
        color: #656363;
        font-size: 13px;
    }
    #project-name a:hover{
        color: #00c851;
        text-decoration: none;
    }


</style>
<script>
    $(document).ready(function(){

        var handler = function (v) {
            pomodoro.changeTime(v);
        }
        // prepend new input field for knob in time-wrapper div
        // i decided to prepend it here instead to prevent showing the
        // input field that was not yet transformed into a knob
        jQuery('#time-wrapper').prepend('<input type="text" id="knob-minutes" value="25">');

        jQuery('#buttons-wrapper').show();

        $("#knob-minutes").knob( {
            'min':0,
            'max':100,
            'fgColor': '#00c851',
            'release': handler,
            'change': handler
        });

        var pomodoro = pomodoroClock();
        //
        $('#btn-start-pomodoro').click(function(){
            pomodoro.start();
        });
        $('#btn-stop-pomodoro').click(function(){
            pomodoro.pause();
        });

    });

    // pomodoro clock
    function pomodoroClock() {
        //i decided to use seconds instead of minutes
        var session = 25 * 60, temp_session = 25 * 60, temp_break = 25 * 60, break_time = 25 * 60, started = false, minutes = 0, seconds = 0, interval, prev_time = 0, is_break = false, seconds_remaining = 0, is_paused = false;
        var is_changed = false;

        return {
            start: start,
            pause: pause,
            isStarted: isStarted,
            changeTime: changeTime
        }

        function start() {


            // it is paused, add the last recorded seconds
            // i have to record each seconds remaining

            if( is_paused && is_changed){

                // add the last recorded seconds remaining to session
                session += seconds_remaining;
                if (is_break) {

                    temp_break = session;

                } else {
                    temp_session = session;
                }
            }

            // reset
            is_paused = false;
            is_changed = false;

            started = true;

            prev_time = parseInt(session / 60);

            // show span minutes
            jQuery('#span-minutes').show();

            jQuery('#span-minutes').html(zeroPad(parseInt(session / 60), 2));

            jQuery('#btn-start-pomodoro').hide();
            jQuery('#btn-stop-pomodoro').show();

            jQuery('#seconds-wrapper').css('visibility', 'visible');

            jQuery('#seconds-wrapper').removeClass('one-digit-minute');

            jQuery('#seconds-wrapper').css('color', 'rgb(135, 206, 235)');

            // knob options
            var options = {
                'displayInput': false,
                'max': session,
                'readOnly': true
            };

            redrawKnob(session, options);
            // add is_time running class to seconds wrapper
            jQuery('#seconds-wrapper').addClass('is_time_running');

            //updateClockView();

            interval = setInterval(function(){

                if(session > 0)  session -= 1;

                updateClockView();


                if(session === 0){
                    if( !is_break ){
                        jQuery('#current-session-type').html('Break Time');
                        is_break = true;
                        session = temp_break;

                        clearInterval(interval);

                        start();

                    } else {

                        jQuery('#current-session-type').html('Focus Time');

                        is_break = false;

                        session = temp_session;

                        clearInterval(interval);

                        start();
                    }

                }
            }, 1000);


        }

        function zeroPad(number, width) {
            var string = String(number);
            while (string.length < width)
                string = "0" + string;
            return string;
        }

        function updateClockView() {
            if(session >= 60){
                minutes = session / 60;
                seconds = session % 60;
            }else {
                minutes = '00';
                seconds = session;
            }

            if(prev_time !== parseInt(session / 60)){
                if(parseInt(minutes) < 10) {
                    jQuery('#knob-minutes').addClass('one-digit');
                    jQuery('#seconds-wrapper').addClass('one-digit-minute');
                }

                //jQuery('#knob-minutes').val(parseInt(minutes)).trigger('change');

                // update span minutes value
            }

            jQuery('#knob-minutes').val(session).trigger('change');

            jQuery('#span-minutes').html(zeroPad(parseInt(minutes), 2));

            prev_time = parseInt(session / 60);
            // record each seconds remaining
            seconds_remaining = parseInt(seconds);

            jQuery('#knob-seconds').html(zeroPad(seconds, 2));
        }

        function redrawKnob(val, options) {

            // get the input element and its parent
            var knob_parent = jQuery("#knob-minutes").parent();
            // remove the parent which will also remove its child nodes
            knob_parent.remove();

            // prepend new input field for knob in time-wrapper div
            // jQuery('#time-wrapper').prepend('<input type="text" id="knob-minutes" class="align-left" value="' + parseInt(val) + '">');

            // redraw the new input but now as a readOnly knob since the
            // clock is already started
            jQuery("#knob-minutes").knob(options);
        }

        function changeTime(time) {
            session = 60 * parseInt(time);

            // record that the time set was changed
            is_changed = true;

            if (is_break) {
                temp_break = 60 * parseInt(time);

            } else {
                temp_session = 60 * parseInt(time);
            }
            jQuery('#seconds-wrapper').css('visibility', 'visible');
            jQuery('#knob-minutes').removeClass('one-digit');
            jQuery('#seconds-wrapper').removeClass('one-digit-minute');


            if(parseInt(session / 60) < 10) {
                //jQuery('#knob-minutes').removeClass('align-left');
                jQuery('#knob-minutes').addClass('one-digit');
                jQuery('#seconds-wrapper').addClass('one-digit-minute');
            }

            // update displayed minutes on the clock
            jQuery('#span-minutes').html(zeroPad(parseInt(session / 60), 2));

        }

        function pause() {

            // record that the session was paused
            is_paused = true;


            clearInterval(interval);

            // knob options

            var handler = function (v) {
                changeTime(v);
            }

            var options = {
                'min':0,
                'max':59,
                'fgColor': '#449d44',
                'release': handler,
                'change': handler
            };
            redrawKnob(session / 60, options);

            jQuery('#span-minutes').html(zeroPad(parseInt(session / 60), 2));

            // hide span minutes
            jQuery('#span-minutes').hide();

            //jQuery('#pomodoro-options').show();
            jQuery('#btn-start-pomodoro').show();
            jQuery('#btn-stop-pomodoro').hide();
            jQuery('#seconds-wrapper').css('color', '#449d44');
            jQuery('#knob-minutes').removeClass('one-digit');
            jQuery('#seconds-wrapper').removeClass('one-digit-minute');

            if(parseInt(session / 60) < 10) {
                jQuery('#knob-minutes').addClass('align-left');
                jQuery('#knob-minutes').addClass('one-digit');
                jQuery('#seconds-wrapper').addClass('one-digit-minute');
            }

            // remove is_time running class to seconds wrapper because session is paused
            jQuery('#seconds-wrapper').removeClass('is_time_running');

        }

        function isStarted() {
            return started;
        }

    }

</script>