<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/css/grapes.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.12.17/grapes.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-component-countdown@0.1.3/dist/grapesjs-component-countdown.min.js"></script>


    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
<div id="gjs" style="height:0px; overflow:hidden;">
    <div class="panel">
        <h1 class="welcome">Welcome to</h1>
        <div class="big-title">
            <svg class="logo" viewBox="0 0 100 100">
                <path d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2"/>
            </svg>
            <span>GrapesJS</span>
        </div>
        <div class="title">
            This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
            copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored
            by git.
        </div>
    </div>
    <style>
        .panel {
            width: 90%;
            max-width: 700px;
            border-radius: 3px;
            padding: 30px 20px;
            margin: 150px auto 0px;
            background-color: #d983a6;
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
            color: rgba(255, 255, 255, 0.75);
            font: caption;
            font-weight: 100;
        }

        .welcome {
            text-align: center;
            font-weight: 100;
            margin: 0px;
        }

        .logo {
            width: 70px;
            height: 70px;
            vertical-align: middle;
        }

        .logo path {
            pointer-events: none;
            fill: none;
            stroke-linecap: round;
            stroke-width: 7;
            stroke: #fff
        }

        .big-title {
            text-align: center;
            font-size: 3.5rem;
            margin: 15px 0;
        }

        .title {
            text-align: justify;
            font-size: 1rem;
            line-height: 1.5rem;
        }
    </style>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        container: '#gjs',
        plugins: ['gjs-component-countdown'],
        pluginsOpts: {
            'gjs-component-countdown': {
                blocks: ['countdown'],
                defaultStyle: true 
            }
        }
    });
</script>


</body>
</html>
