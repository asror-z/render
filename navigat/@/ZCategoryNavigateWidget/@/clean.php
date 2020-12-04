<?
use zetsoft\widgets\market\ZMenuWidget;

?>


<div class="container">

    <div class="links position-sticky sticky-top bg-success">
        <a id="anchor1Link" href="#anchor1">Anchor 1</a>
        <a id="anchor2Link" href="#anchor2">Anchor 2</a>
        <a id="anchor3Link" href="#anchor3">Anchor 3</a>
        <a id="anchor4Link" href="#anchor4">Anchor 4</a>
    </div>
    <div class="longText">
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <p>This is a line, and there will be more after me.</p>
        <div id="anchor2" class="py-4">
            <p  class="anchor bg-danger">anchor2 : This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>

            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>

            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
            <p>This is a line, and there will be more after me.</p>
        </div>
       <div id="anchor3" class="py-4">
           <p  class="anchor bg-danger">anchor3 : This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>
           <p>This is a line, and there will be more after me.</p>


       </div>

    </div>
    <div class="links">
        <a id="anchor1Link2" href="#anchor1">Anchor 1</a>
        <a id="anchor2Link2" href="#anchor2">Anchor 2</a>
        <a id="anchor3Link2" href="#anchor3">Anchor 3</a>
        <a id="anchor4Link2" href="#anchor4">Anchor 4</a>
    </div>
    <div class="filler"></div>
</div>

<script>

    (function() {
        let d = document;

        function init() {
            //Links
            let anchor1Link  = d.getElementById('anchor1Link');
            let anchor2Link  = d.getElementById('anchor2Link');
            let anchor3Link  = d.getElementById('anchor3Link');
            let anchor4Link  = d.getElementById('anchor4Link');
            let anchor1Link2 = d.getElementById('anchor1Link2');
            let anchor2Link2 = d.getElementById('anchor2Link2');
            let anchor3Link2 = d.getElementById('anchor3Link2');
            let anchor4Link2 = d.getElementById('anchor4Link2');
            //Anchors
            let anchor1      = d.getElementById('anchor1');
            let anchor2      = d.getElementById('anchor2');
            let anchor3      = d.getElementById('anchor3');
            let anchor4      = d.getElementById('anchor4');

            anchor1Link.addEventListener('click', (e) => { scrollTo(anchor1, e) }, false);
            anchor1Link2.addEventListener('click', (e) => { scrollTo(anchor1, e) }, false);
            anchor2Link.addEventListener('click', (e) => { scrollTo(anchor2, e) }, false);
            anchor2Link2.addEventListener('click', (e) => { scrollTo(anchor2, e) }, false);

            anchor3Link.addEventListener('click', (e) => { scrollTo(anchor3, e) }, false);
            anchor3Link2.addEventListener('click', (e) => { scrollTo(anchor3, e) }, false);
            anchor4Link.addEventListener('click', (e) => { scrollTo(anchor4.offsetTop, e) }, false);
            anchor4Link2.addEventListener('click', (e) => { scrollTo(anchor4.offsetTop, e) }, false);

            console.log(anchor2); //DEBUG
            console.log('anchor1: '+scrollTopValue(anchor1)+' / '+offsetTopValue(anchor1)); //DEBUG
            console.log('anchor2: '+scrollTopValue(anchor2)+' / '+offsetTopValue(anchor2)); //DEBUG
            console.log('anchor3: '+scrollTopValue(anchor3)+' / '+offsetTopValue(anchor3)); //DEBUG
            console.log('anchor4: '+scrollTopValue(anchor4)+' / '+offsetTopValue(anchor4)); //DEBUG


            console.log('App loaded. Have fun!');
        }

        function scrollTopValue(domElement) { //DEBUG
            return 'scrollTopValue:', domElement.scrollTop;
        }
        function offsetTopValue(domElement) { //DEBUG
            return 'offsetTopValue:', domElement.offsetTop;
        }


        var requestAnimFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
        })();

        function scrollTo(to, callback, duration = 1500) {

            if (isDomElement(to)) {

                to = to.offsetTop;
            }

            function move(amount) {
                // document.scrollingElement.scrollTop = amount; //FIXME Test that
                document.documentElement.scrollTop = amount;
                document.body.parentNode.scrollTop = amount;
                document.body.scrollTop = amount;
            }

            function position() {
                return document.documentElement.offsetTop || document.body.parentNode.offsetTop || document.body.offsetTop;
            }

            var start = position(),
                change = to - start,
                currentTime = 0,
                increment = 20;
            console.log('start:', start); //DEBUG
            console.log('to:', to); //DEBUG
            console.log('change:', change); //DEBUG

            var animateScroll = function() {
                // increment the time
                currentTime += increment;
                // find the value with the quadratic in-out easing function
                var val = Math.easeInOutQuad(currentTime, start, change, duration);
                // move the document.body
                move(val);
                // do the animation unless its over
                if (currentTime < duration) {
                    requestAnimFrame(animateScroll);
                }
                else {
                    if (callback && typeof(callback) === 'function') {
                        // the animation is done so lets callback
                        callback();
                    }
                }
            };

            animateScroll();
        }

        init();
    })();


    Math.easeInOutQuad = function(t, b, c, d) {
        t /= d / 2;
        if (t < 1) {
            return c / 2 * t * t + b
        }
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    };

    Math.easeInCubic = function(t, b, c, d) {
        var tc = (t /= d) * t * t;
        return b + c * (tc);
    };

    Math.inOutQuintic = function(t, b, c, d) {
        var ts = (t /= d) * t,
            tc = ts * t;
        return b + c * (6 * tc * ts + -15 * ts * ts + 10 * tc);
    };

    function isDomElement(obj) {
        return obj instanceof Element;
    }

    function isMouseEvent(obj) {
        return obj instanceof MouseEvent;
    }

    function findScrollingElement(element) { //FIXME Test this too
        do {
            if (element.clientHeight < element.scrollHeight || element.clientWidth < element.scrollWidth) {
                return element;
            }
        } while (element = element.parentNode);
    }

</script>


