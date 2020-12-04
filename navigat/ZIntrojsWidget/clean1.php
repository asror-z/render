<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Defining with JSON configuration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intro.js - Better introductions for websites and features with a step-by-step guide for your projects.">
    <meta name="author" content="Afshin Mehrabani (@afshinmeh) in usabli.ca group">

    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/demo.css" rel="stylesheet">

    <!-- Add IntroJs styles -->
    <link href="https://cdn.jsdelivr.net/npm/intro.js@2.9.3/introjs.css" rel="stylesheet">

    <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>

<body>

<div class="container-narrow">

    <div class="masthead">
        <ul id="step5" class="nav nav-pills pull-right">
            <li><a href="https://github.com/usablica/intro.js/tags"><i class='icon-black icon-download-alt'></i> Download</a></li>
            <li><a href="https://github.com/usablica/intro.js">Github</a></li>
            <li><a href="https://twitter.com/usablica">@usablica</a></li>
        </ul>
        <h3 class="muted">Intro.js</h3>
    </div>

    <hr>

    <div class="jumbotron">
        <h1 id="step1">Programmatic</h1>
        <p id="step4" class="lead">In this example we are going to define steps with JSON configuration.</p>
        <a class="btn btn-large btn-success" href="javascript:void(0);" onclick="startIntro();">Show me how</a>
    </div>

    <hr>

    <div class="row-fluid marketing">
        <div id="step2" class="span6">
            <h4>Section One</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>

            <h4>Section Two</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>

            <h4>Section Three</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
        </div>

        <div id="step3" class="span6">
            <h4>Section Four</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>


            <h4>Section Five</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>

            <h4>Section Six</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
        </div>
    </div>

    <hr>

</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/intro.js@2.9.3/intro.js"></script>
<script type="text/javascript">
    function startIntro(){
        var intro = introJs();
        intro.setOptions({
            steps: [
                {
                    intro: "Hello world!"
                },
                {
                    element: document.querySelector('#step1'),
                    intro: "This is a tooltip."
                },
                {
                    element: document.querySelectorAll('#step2')[0],
                    intro: "Ok, wasn't that fun?",
                    position: 'right'
                },
                {
                    element: '#step3',
                    intro: 'More features, more fun.',
                    position: 'left'
                },
                {
                    element: '#step4',
                    intro: "Another step.",
                    position: 'bottom'
                },
                {
                    element: '#step5',
                    intro: 'Get it, use it.'
                }
            ]
        });

        intro.start();
    }
</script>
</body>
</html>
