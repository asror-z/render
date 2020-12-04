<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-blocks-basic@0.1.8/dist/grapesjs-blocks-basic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-sproutvideo@0.0.9/dist/grapesjs-plugin-sproutvideo.min.js"></script>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    <div style="margin:100px 100px 25px; padding:25px; font:caption">
        This is a demo content from index.html. For the development, you shouldn't edit this file, instead you can
        copy and rename it to _index.html, on next server start the new file will be served, and it will be ignored by git.
    </div>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        showOffsets: 1,
        container: '#gjs',
        fromElement: true,
        plugins: ['gjs-blocks-basic', 'gjs-sproutvideo'],
        pluginsOpts: {
            'gjs-blocks-basic': {},
            'gjs-sproutvideo': {}
        }
    });
    window.editor = editor;
</script>
</body>
</html>