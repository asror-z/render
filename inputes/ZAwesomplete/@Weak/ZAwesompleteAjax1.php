<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/awesomplete@1.1.5/awesomplete.css">
    <script src="https://cdn.jsdelivr.net/npm/awesomplete@1.1.5/awesomplete.min.js"></script>
    <title>Document</title>
</head>
<body>


<section id="ajax-example">
    <input type="text">

    <script>



        var ajax = new XMLHttpRequest();
        ajax.open("GET", "https://nominatim.openstreetmap.org/search?q=tashk&format=json", true);
        ajax.onload = function () {
            var list = JSON.parse(ajax.responseText).map(function (i) {
                return i.display_name;
            });
            new Awesomplete(document.querySelector("#ajax-example input"), {list: list});
        };
        ajax.send();
    </script>
</section>


</body>

