<!DOCTYPE html>

<html>
<head>
    <title>Endless Scroll Demo (by Fred Wu)</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

    <style type="text/css" media="screen">
        #images { width: 600px; height: 550px; overflow-x: hidden; }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-endless-scroll/1.8.0/js/jquery.endless-scroll.min.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('#list').endlessScroll({
                pagesToKeep: 10,
                fireOnce: false,
                insertBefore: "#list div:first",
                insertAfter: "#list div:last",
                content: function(i, p) {
                    console.log(i, p)
                    return '<li>' + p + '</li>'
                },
                ceaseFire: function(i) {
                    if (i >= 10) {
                        return true;
                    }
                },
                intervalFrequency: 5
            });

            $('#images').scrollTop(101);
            var images = $("ul#images").clone().find("li");
            $('#images').endlessScroll({
                pagesToKeep: 5,
                inflowPixels: 100,
                fireDelay: 10,
                content: function(i, p, d) {
                    console.log(i, p, d)
                    return images.eq(Math.floor(Math.random()*8))[0].outerHTML;
                }
            });
        });
    </script>
</head>

<body>

<div class="example">

    <ul id="images">
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Grass Blades" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Stones" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Sea Mist" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Pier" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Lotus" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Mojave" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Lightning" /></li>
        <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxlqsxYocvn_I6EBl1SUG53t8KUiTvWSnib7_x9XGJEsFQNrLs&usqp=CAU" width="580" height="360" alt="Grass Blades" /></li>
    </ul>
</div>


</body>

</html>
