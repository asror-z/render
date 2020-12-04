<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Scroll To Anchor Example</title>
    <style>


        h1 {
            color: rebeccapurple;
        }

        .menu {
            position: sticky;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 60px;
            top: 0;
            background: rgb(0, 22, 122);
            padding: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);

        a {
            color: white;
        }

        }

        .section {
            height: 50vh;
            margin: 20px;
        }

        .-one {
            background-color: rgb(147, 255, 174);
        }

        .-two {
            background-color: rgb(129, 255, 255);
        }

        .-three {
            background-color: rgb(255, 197, 110);
        }

        .-four {
            background-color: rgb(255, 148, 192);
        }
    </style>
    <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">


    <div class="menu">
        <a href="#one">One</a>
        <a href="#two">Two</a>
        <a href="#three">Three</a>
        <a href="#four">Four</a>
    </div>
    <div class="section -one" id="one" tabindex='1'>
        <h2>Section one</h2>
    </div>
    <div class="section -two" id="two" data-anchor-offset="100">
        <h2>Section two</h2>
        <p>data-anchor-offset="100"</p>
    </div>
    <div class="section -three" id="three">
        <h2>Section three</h2>
    </div>
    <div class="section -four" id="four">
        <h2>Section four</h2>
    </div>
</div>

<script>
    (function () {
        'use strict';

        function ScrollToAnchor(t) {
            var e = this;
            void 0 === t && (t = {});
            var n = t.offset;
            void 0 === n && (n = 0);
            var o = t.duration;
            void 0 === o && (o = 800), this.offset = n, this.duration = o;
            var r = function (t) {
                return t < .5 ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t
            }, i = Array.prototype.slice.call(document.getElementsByTagName("a")).filter(function (t) {
                return function (t) {
                    return -1 != (t.href && t.href.indexOf("#"))
                }(t)
            }), a = i.filter(function (t) {
                return function (t) {
                    return t.pathname == window.location.pathname || "/" + t.pathname == window.location.pathname && t.search == location.search
                }(t)
            });
            document.addEventListener("click", function (t) {
                var i = a.filter(function (event) {
                    return t.target === e
                })[0];
                i && (t.preventDefault(), function (t) {
                    var i = t.getAttribute("href"), a = document.querySelector(i),
                        u = a.getAttribute("data-anchor-offset");
                    n = u || e.offset;
                    var c = function (t) {
                            return Math.floor(t.getBoundingClientRect().top)
                        }(a), f = window.pageYOffset || document.documentElement.scrollTop, l = f, d = f + c - n, m = !1,
                        s = null, h = function (t) {
                            if (m) {
                                return document.documentElement.scrollTop = d, a.focus(), void window.history.pushState("", "", i);
                            }
                            (l == d || t - s >= o) && (m = !0);
                            var e = r((t - s) / o), n = l + (d - l) * e;
                            document.documentElement.scrollTop = n, requestAnimationFrame(h);
                        };
                    requestAnimationFrame(function (t) {
                        s = t, h(t);
                    });
                }(i));
            });
        }

        var smoothScroll = new ScrollToAnchor({offset: 70, duration: 1000,});
        console.log('Index.js file рџЋ');
    }());
</script>
</body>
</html>
