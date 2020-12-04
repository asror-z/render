
<link rel="stylesheet" href="/render/navigat/ZStickyElementsWidget/demo/assets/css.css">

<div class="Container-parent">
    <div class="Container">
        <div class="Container-content ">
            <h1><span touch-action="none">Sticky</span> Elements</h1>
            <p>UI/UX experiment. For fun, but not only?</p>
            <div class="buttons ">
                <button class="button button--secondary" touch-action="none" style="transform: translateX(0px) translateY(0px); will-change: transform;">Oh, my&nbsp;!</button>
                <button class="button button--primary item" touch-action="none" style="transform: translateX(0px) translateY(0px); will-change: transform;">Sticky buttons</button>
            </div>
            <p>Also, <a class="first" href="http://design.iamvdo.me/stickyElements/#" touch-action="none">sticky links</a>. Created by <a href="http://twitter.com/iamvdo" touch-action="none">@iamvdo</a>. Improve code on <a href="http://github.com/iamvdo/stickyElements" touch-action="none">Github</a></p>
            <p>Use responsibly. Please, don’t annoy your users.</p>
            <p>Did you spot <a href="http://iamvdo.me/en/blog/ui-with-rotating-color-scheme">the rotating color scheme</a>? More UI experiments on <a href="http://iamvdo.me/en/design">iamvdo.me/design</a></p>
        </div>
        <div class="Container-footer options">
            <div class="options-inner">
                <h2>Control</h2>
                <p>Play with controls to adjust effect</p>
                <div class="inputs">
                    <div class="input">
                        <label for="inputX">Horizontal stickiness</label>
                        <input id="inputX" type="range" min="0" max="10" step="0.1">
                    </div>
                    <div class="input">
                        <label for="inputY">Vertical stickiness</label>
                        <input id="inputY" type="range" min="0" max="10" step="0.1" value="6">
                    </div>
                    <div class="input">
                        <label for="inputDuration">Duration</label>
                        <input id="inputDuration" type="range" min="0" max="2000" step="50" value="700">
                    </div>
                </div>
            </div>
        </div>
        <!--  <script src="./demo_files/pep.js.Без названия"></script>-->
        <script src="/render/navigat/ZStickyElementsWidget/demo/assets/stickyelements-animate.js"></script>
        <script src="/render/navigat/ZStickyElementsWidget/demo/assets/ui.js"></script>
        <script>
            stickyElements('.item', {
                stickiness: 5,
                duration: 450
            });
        </script>
    </div>
</div>
