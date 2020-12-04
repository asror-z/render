<?php
$page = file_get_contents('../render/Maps/leaflet/leaflet.html');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Preset Webpage</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <link href="dist/grapesjs-preset-webpage.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="dist/grapesjs-preset-webpage.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .submit_button {
            position: absolute;
            z-index: 9999;
            transform: translate(-76%, 50%);
            top: 50%;
            background: #28a745;
            border: 0;
            padding: 5px 29px;
            border-radius: 0 5px 5px 0;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: 0.5s;
        }

        .submit_button:hover {
            transform: translate(0, 50%);
        }
    </style>
</head>
<body>


<button class="submit_button">Submit</button>

<div id="gjs" style="height:0px; overflow:hidden">
    <?php
    echo $page
    ?>

</div>


<script type="text/javascript">

    var editor = grapesjs.init({

        /**
         *
         * https://ckeditor.com/cke4/addon/pastefromword
         */
        allowScripts: 1,
        height: '100%',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,

        plugins: [
            'zgjs-preset-webpage'
        ],
        pluginsOpts: {
            'gjs-preset-webpage': {

            }
        },
        canvas: {
            styles: [],
            scripts: [
                'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js'
            ]
        },
    });

    const blockManager = editor.BlockManager;

    blockManager.add('some-block-id', {
        label: `<div>
      <img src="https://picsum.photos/70/70"/>
      <div class="my-label-block">Widgets</div>
    </div>`,
        content: '<div></div>',
        category: 'zetsoft',
        render: ({model, className}) => `<div class="${className}__my-wrap">
      Before label
      ${model.get('label')}
      After label
    </div>`,
    });
</script>
<script>

    $(document).ready(function () {
        $('button').click(function () {
            console.log('HERE');
            var a = document.getElementsByTagName('iframe')[0]
            var pcontent = a.contentDocument.getElementById('wrapper').innerHTML;
            $.ajax({
                url: '/grapes/save1.php',
                type: "POST",
                data: {"pcontent": pcontent}
            });
            return false;
        })

    });
</script>


</body>
</html>
