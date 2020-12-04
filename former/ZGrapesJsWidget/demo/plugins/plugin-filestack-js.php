<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.15.9/css/grapes.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.15.9/grapes.js"></script>
    <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/grapesjs-plugin-filestack@0.1.1/dist/grapesjs-plugin-filestack.css" rel="stylesheet"/>
    <script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

</head>
<body>


<div id="gjs"></div>

<script type="text/javascript">

    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager:{autoload: 0},
        container : '#gjs',
        fromElement: true,

        plugins: ['gjs-plugin-filestack'],
        pluginsOpts: {
            'gjs-plugin-filestack': { key: 'Acu9391ZWSTSzqEkmT4Lkz' },

        }
    });



</script>


</body>
</html>
