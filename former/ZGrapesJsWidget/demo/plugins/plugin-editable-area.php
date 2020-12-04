<?php
    
use zetsoft\assets\grapes\ZGrapePluginEditableAreaAsset;

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Editable Areas Webpage</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <?php
        ZGrapePluginEditableAreaAsset::register($this);
    ?>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        .gjs-pn-panel.gjs-pn-views {
            padding: 0;
            border-bottom: none;
        }
        .gjs-pn-btn.gjs-pn-active {
            box-shadow: none;
        }
        .gjs-pn-views .gjs-pn-btn {
            margin: 0;
            height: 40px;
            padding: 10px;
            width: 33.3333%;
            border-bottom: 2px solid rgba(0, 0, 0, 0.3);
        }
        /* Tool tipps */
        [data-tooltip] {
            position: relative;
        }
        [data-tooltip]::after {
            font-family: Helvetica, sans-serif;
            background: rgba(51, 51, 51, 0.9);
            background: rgba(55, 61, 73, 0.9);
            border-radius: 3px;
            bottom: 100%;
            color: #fff;
            content: attr(data-tooltip);
            display: block;
            font-size: 12px;
            left: 50%;
            line-height: normal;
            max-width: 32rem;
            opacity: 0;
            overflow: hidden;
            padding: 0.6rem 1rem;
            pointer-events: none;
            position: absolute;
            text-overflow: ellipsis;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            transition: all 0.216s ease;
            z-index: 99;
        }
        [data-tooltip]:focus::after,
        [data-tooltip]:hover::after {
            opacity: 1;
            -webkit-transform: translate(-50%, -0.5rem);
            -ms-transform: translate(-50%, -0.5rem);
            transform: translate(-50%, -0.5rem);
        }
        [data-tooltip][disabled],
        [data-tooltip].disabled {
            pointer-events: auto;
        }
        [data-tooltip-pos=right]::after {
            bottom: 50%;
            left: 100%;
            -webkit-transform: translate(0, 50%);
            -ms-transform: translate(0, 50%);
            transform: translate(0, 50%);
        }
        [data-tooltip-pos=right]:focus::after,
        [data-tooltip-pos=right]:hover::after {
            -webkit-transform: translate(0.5rem, 50%);
            -ms-transform: translate(0.5rem, 50%);
            transform: translate(0.5rem, 50%);
        }
        [data-tooltip-pos=bottom]::after {
            bottom: auto;
            top: 100%;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        [data-tooltip-pos=bottom]:focus::after,
        [data-tooltip-pos=bottom]:hover::after {
            -webkit-transform: translate(-50%, 0.5rem);
            -ms-transform: translate(-50%, 0.5rem);
            transform: translate(-50%, 0.5rem);
        }
        [data-tooltip-pos=left]::after {
            bottom: 50%;
            left: auto;
            right: 100%;
            -webkit-transform: translate(0, 50%);
            -ms-transform: translate(0, 50%);
            transform: translate(0, 50%);
        }
        [data-tooltip-pos=left]:focus::after,
        [data-tooltip-pos=left]:hover::after {
            -webkit-transform: translate(-0.5rem, 50%);
            -ms-transform: translate(-0.5rem, 50%);
            transform: translate(-0.5rem, 50%);
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    <div class="panel">
        <h1 class="welcome">Welcome to</h1>
        <div class="big-title">
            <svg class="logo" viewBox="0 0 100 100">
                <path d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2"/>
            </svg>
            <span>GrapesJS Plugin for editable Areas</span>
        </div>
        <div class="cms-editable" data-editable="true">
            <div class="title" >
                This is a demo content from index.html. Only content within this div can be editable as it holds the <b>data-editable=true</b> attribute.
            </div>
        </div>
    </div>
    <style>
        .gjs-dashed .cms-editable {
            border: 1px dashed white;
        }
        .cms-editable {
            min-height: 50px;
            padding: 4px;
        }
        .panel {
            width: 90%;
            max-width: 700px;
            border-radius: 3px;
            padding: 30px 20px;
            margin: 150px auto 0px;
            background-color: #93d9c2;
            box-shadow: 0px 3px 10px 0px rgba(0,0,0,0.25);
            color:rgba(255,255,255,0.75);
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
        height: '1000px',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: { autoload: 0 },
        container: '#gjs',
        fromElement: true,
        plugins: ['editable-area'],
        pluginsOpts: {
        }
    });
</script>
</body>
</html>
