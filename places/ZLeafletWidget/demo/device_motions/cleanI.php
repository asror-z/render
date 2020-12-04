<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="position">

    </div>
    <div class="positionEvent"></div>

    <script>
        let pos = document.querySelector('.position');
        let posEv = document.querySelector('.positionEvent');

        navigator.geolocation.watchPosition(function (data) {
            console.log("watch");
            console.log(data);
            pos.innerHTML = "<p> Watch Position:" + data.coords.heading + "</p>";
        });
        navigator.geolocation.getCurrentPosition(function (data) {
            console.log('curent');
            console.log(data);
            posEv.innerHTML = "<p> Current Position:" + data.coords.heading + "</p>";
        });



        // window.addEventListener("devicemotion", function () {
        //     navigator.geolocation.watchPosition(function (data) {
        //         console.log("watch");
        //         console.log(data);
        //         pos.innerHTML = "<p> Watch Position:" + data.coords.heading + "</p>";
        //     });
        //     navigator.geolocation.getCurrentPosition(function (data) {
        //         console.log('curent');
        //         console.log(data);
        //         posEv.innerHTML = "<p> Current Position:" + data.coords.heading + "</p>";
        //     });
        // });

        // navigator.geolocation.watchPosition((data) => {
        //     console.log("watch");
        //     console.log(data);
        //     pos.innerHTML = "<p> Watch Position:"+data.coords.heading+"</p>";
        //     console.log("watch");
        // })

    </script>

</body>

</html>