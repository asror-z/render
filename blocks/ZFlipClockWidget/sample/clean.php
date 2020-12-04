<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>
<style>
    #clock{
    padding: 25px;
    }
</style>

        <div class="well">
            <div id="clock"></div>
        </div>

<div class="message"></div>

<script type="text/javascript">

    setInterval(function () {
        flipTest()
    }, 1000);

    function flipTest() {
        $("#test").removeClass("play");
        var n = $("#test .fc-number.active");

        if (n.html() == undefined) {
            n = $("#test .fc-number").eq(0);
            n.addClass("before")
                .removeClass("active")
                .next(".fc-number")
                .addClass("active")
                .closest("#test")
                .addClass("play");
        } else if (n.is(":last-child")) {
            $("#test .fc-number").removeClass("before");
            n.addClass("before").removeClass("active");
            n = $("#test .fc-number").eq(0);
            n.addClass("active")
                .closest("#test")
                .addClass("play");
        } else {
            $("#test .fc-number").removeClass("before");
            n.addClass("before")
                .removeClass("active")
                .next(".fc-number")
                .addClass("active")
                .closest("#test")
                .addClass("play");
        }
    }

    var clock;

    $(document).ready(function () {
        var clock;

        clock = $('#clock').FlipClock({
            clockFace: 'DailyCounter',
            autoStart: false,
            callbacks: {
                stop: function () {
                    $('.message').html('The clock has stopped!')
                }
            }
        });

        clock.setTime(12);
        clock.setCountdown(true);
        clock.start();

    });
</script>
