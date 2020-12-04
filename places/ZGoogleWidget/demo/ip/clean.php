<?php
/**
 * @author   Zoirjon Sobirov
 * https://t.me/zoirjon_sobirov
 */
?>
<html>
<body>

<div id="loc">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    setInterval (function addressCatchViaIp () {
        $.ajax({
            url: 'https://ipinfo.io',
            dataType: 'jsonp',
            jsonp: 'callback',
        })
            .then(
                function success(response) {
                    $("#loc").html(response);
                    console.log(response.ip, response.country,response.loc);
                },

                function fail(data, status) {
                    console.log('Request failed.  Returned status of',
                        status);
                }
            );
    }, 20000)
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        #sphere {
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            background-color: blue;
        }
        .garden {
            position: relative;
            width : 200px;
            height: 200px;
            border: 5px solid #CCC;
            border-radius: 10px;
        }

        .ball {
            position: absolute;
            top   : 90px;
            left  : 90px;
            width : 20px;
            height: 20px;
            background: green;
            border-radius: 100%;
        }
    </style>
</head>
<body>
<!--<div id="content" >
    <div id="sphere "></div>

</div>      -->
<div class="garden">
    <div class="ball"></div>
</div>

<pre class="output"></pre>
<script>
    /** var x = 0,
     y = 0,
     vx = 0,
     vy = 0,
     ax = 0,
     ay = 0;

     var sphere  =document.getElementById('sphere');  */
    var ball   = document.querySelector('.ball');
    var garden = document.querySelector('.garden');
    var output = document.querySelector('.output');

    var maxX = garden.clientWidth  - ball.clientWidth;
    var maxY = garden.clientHeight - ball.clientHeight;

    function handleOrientation(event) {
        var z = event.alpha;  // In degree in the range [-180,180]
        var x = event.beta;  // In degree in the range [-180,180]
        var y = event.gamma; // In degree in the range [-90,90]

        output.innerHTML  = "alpha : " + z + "\n";
        output.innerHTML  = "beta : " + x + "\n";
        output.innerHTML += "gamma: " + y + "\n";

        // Because we don't want to have the device upside down
        // We constrain the x value to the range [-90,90]
        if (x >  90) { x =  90};
        if (x < -90) { x = -90};

        // To make computation easier we shift the range of
        // x and y to [0,180]
        x += 90;
        y += 90;

        // 10 is half the size of the ball
        // It center the positioning point to the center of the ball
        ball.style.top  = (maxY*y/180 - 10) + "px";
        ball.style.left = (maxX*x/180 - 10) + "px";
    }

    window.addEventListener('deviceorientation', handleOrientation);



</script>

</body>
</html>
