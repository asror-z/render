<!DOCTYPE html>
<!-- saved from url=(0033)http://instantclick.io/click-test -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Test your click speed - InstantClick</title>
    <meta name="viewport" content="width=768">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/instantclick/3.1.0/instantclick.min.js">
</head>
<body>
<header id="header">
    <div class="logo"><a href="http://instantclick.io/">InstantClick</a></div>
    <ul>
        <li><a href="http://instantclick.io/documentation">Documentation</a></li>
        <li><a href="http://instantclick.io/click-test">Click test</a></li>
    </ul>
</header>

<article class="container">
    <h1>Click test</h1>

    <table id="click-test">
        <tbody>

        <tr>
            <td><a id="link1" href="http://instantclick.io/click-test#" data-no-instant="">Click me</a>
            </td>
            <td><a id="link2" class="btn btn-big" href="http://instantclick.io/click-test#" data-no-instant="">Click
                me</a>
            </td>
        </tr>
        <tr class="results">
            <td>
                <p>Click − Hover = <strong id="link1-click-hover"></strong><br>
                    Click − Mousedown = <strong id="link1-click-mousedown"></strong>
                </p>
                <p>Click − Touchstart = <strong id="link1-click-touchstart"></strong>
                </p></td>
            <td>

                <p>Click − Hover = <strong id="link2-click-hover"></strong><br>
                    Click − Mousedown = <strong id="link2-click-mousedown"></strong>
                </p>
                <p>Click − Touchstart = <strong id="link2-click-touchstart"></strong>
                </p></td>
        </tr>
        </tbody>
    </table>

    <script>
        function $(id) {
            return document.getElementById(id)
        }

        var times = {
            touchstart: 0,
            hover: 0,
            mousedown: 0,
            click: 0
        }

        $('link1').addEventListener('mouseover', function () {
            times.hover = +new Date
        })
        $('link2').addEventListener('mouseover', function () {
            times.hover = +new Date
        })

        $('link1').addEventListener('mousedown', function () {
            times.mousedown = +new Date
        })
        $('link2').addEventListener('mousedown', function () {
            times.mousedown = +new Date
        })

        $('link1').addEventListener('touchstart', function () {
            times.touchstart = +new Date
        })
        $('link2').addEventListener('touchstart', function () {
            times.touchstart = +new Date
        })

        function delay(time) {
            if (times[time] == 0)
                return '∞'
            return times.click - times[time] + ' ms'
        }

        $('link1').addEventListener('click', function (e) {
            e.preventDefault()
            times.click = +new Date
            $('link1-click-hover').innerHTML = delay('hover')
            $('link1-click-mousedown').innerHTML = delay('mousedown')
            $('link1-click-touchstart').innerHTML = delay('touchstart')
        })
        $('link2').addEventListener('click', function (e) {
            e.preventDefault()
            e.target.blur()
            times.click = +new Date
            $('link2-click-hover').innerHTML = delay('hover')
            $('link2-click-mousedown').innerHTML = delay('mousedown')
            $('link2-click-touchstart').innerHTML = delay('touchstart')
        })

    </script>
</article>


<div id="instantclick" style="opacity: 0;">
    <div id="instantclick-bar" class="instantclick-bar" style="transform: translate(100%);">

    </div>
</div>
</body>
</html>
