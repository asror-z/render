<?php
// $page = file_get_contents('../Maps/leaflet/leaflet.html');
$page = file_get_contents('../../../Places/Maps/leaflet/leaflet.html');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/grapesjs@0.16.2/dist/css/grapes.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/grapesjs-preset-webpage@0.1.11/dist/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/tooltip.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/grapesjs-plugin-filestack@0.1.1/dist/grapesjs-plugin-filestack.css">
    <link rel="stylesheet" href="/publish/navigs/Grapes/css/demos.css">

    <script src="https://cdn.jsdelivr.net/npm/analytics.js@2.9.1/analytics.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="/publish/navigs/Grapes/js/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs@0.16.2/dist/grapes.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-preset-webpage@0.1.11/dist/grapesjs-preset-webpage.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-lory-slider@0.1.5/dist/grapesjs-lory-slider.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-tabs@0.2.2/dist/grapesjs-tabs.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-custom-code@0.1.2/dist/grapesjs-custom-code.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-touch@0.1.1/dist/grapesjs-touch.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-parser-postcss@0.1.1/dist/grapesjs-parser-postcss.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-tooltip@0.1.5/dist/grapesjs-tooltip.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-tui-image-editor@0.1.3/dist/grapesjs-tui-image-editor.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/grapesjs-typed@1.0.5/dist/grapesjs-typed.min.js"></script>

    <style>
        body, html {
            margin: 0;
            font: caption;
            height: 100%;
        }

        .gjs-pn-panel {
            position: relative;
        }

        .row {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;
        }

        .column {
            min-height: 75px;
            flex-grow: 1;
            flex-basis: 100%;
            overflow: auto;
        }

        .editor-clm {
            display: flex;
            flex-direction: column;
        }

        .gjs-blocks-c {
            justify-content: center;
            height: 50px;
        }

        .gjs-block {
            width: auto;
            font-size: 5px;
            justify-content: center;
            height: auto;
            min-height: auto;
        }

        .gjs-block-label {
            display: none;
        }

        .gjs-cv-canvas {
            width: 100%;
            height: 100%;
            top: 0;
        }

        .gjs-blocks-cs {
            border: 1px solid rgba(0,0,0,0.3);
            border-top: none;
        }

        /* Theming */
        .gjs-one-bg {
            background-color: #242A3B;
        }

        .gjs-two-color {
            color: #9ca8bb;
        }

        .gjs-three-bg {
            background-color: #1E8FE1;
            color: white;
        }

        .gjs-four-color,
        .gjs-four-color-h:hover {
            color: #1E8FE1;
        }
        </style>
        
</head>
<body>



<div class="row" style="height:100%">
    <div id="layers" class="column" style="flex-basis: 500px;">
        Layers here
        <div id="layers-container"></div>
    </div>

    <div class="column editor-clm">
        <div id="blocks"></div>


        <div id="gjs2" style="overflow:hidden;">
            <div style="padding: 25px 50px; margin: 50px 50px 0;" data-gjs-name="Text1">
                Text 1
            </div>
            <div style="padding: 25px 50px; margin: 0 50px;" data-gjs-name="Text2">
                Text 2
            </div>
        </div>
    </div>

    <div id="style-manager" class="column" style="flex-basis: 500px">
        Style Manager here
        <br>
        <div id="selectors-container"></div>
        <div id="traits-container"></div>
        <div id="style-manager-container"></div>
    </div>
</div>


<script>
    var editor  = grapesjs.init({
        container  : '#gjs2',
        height: '100%',
        fromElement: true,
        storageManager: { type: 0 },
        plugins: ['gjs-blocks-basic'],
        layerManager: {
            appendTo: '#layers-container'
        },
        blockManager: {
            appendTo: '#blocks'
        },
        styleManager: {
            appendTo: '#style-manager-container',
            sectors: [{
                name: 'General',
                open: false,
                buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
            },{
                name: 'Dimension',
                open: false,
                buildProps: [ 'width', 'height', 'max-width', 'min-height', 'margin', 'padding']
            },{
                name: 'Typography',
                open: false,
                buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-align', 'text-shadow']
            },{
                name: 'Decorations',
                open: false,
                buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
            },{
                name: 'Extra',
                open: false,
                buildProps: ['opacity', 'transition', 'perspective', 'transform'],
                properties: [{
                    type: 'slider',
                    property: 'opacity',
                    defaults: 1,
                    step: 0.01,
                    max: 1,
                    min:0,
                }]
            }],
        },
        selectorManager: {
            appendTo: '#selectors-container',
        },
        traitManager: {
            appendTo: '#traits-container',
        },
        panels: {
            defaults: [{
                id: 'layers',
                el: '#layers',
                resizable: {
                    tc: 0,
                    cr: 1,
                    bc: 0,
                    keyWidth: 'flex-basis',
                },
            },{
                id: 'styles',
                el: '#style-manager',
                resizable: {
                    tc: 0,
                    cr: 0,
                    cl: 1,
                    bc: 0,
                    keyWidth: 'flex-basis',
                },
            }]
        }
    });

    const bm = editor.BlockManager;
    editor.on('load', () => {
        editor.BlockManager.render([
            bm.get('column1').set('category', ''),
            bm.get('column2').set('category', ''),
            bm.get('column3').set('category', ''),
            bm.get('text').set('category', ''),
            bm.get('image').set('category', '')
        ])
    });

    editor.runCommand('sw-visibility');
</script>


</body>
</html>
