<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <link href="https://grapesjs.com/stylesheets/grapes.min.css?v0.14.43" rel="stylesheet">
    <script src="https://grapesjs.com/js/grapes.min.js?v0.14.43"></script>
    <script src="dist/grapesjs-plugin-carousel.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
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
        height: '100%',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-plugin-carousel'],
        pluginsOpts: {
            'grapesjs-plugin-carousel': {
                some: 'value'
            }
        }
    });
    window.editor = editor;
</script>
</body>
</html><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Boilerplate</title>
    <link href="https://grapesjs.com/stylesheets/grapes.min.css?v0.14.43" rel="stylesheet">
    <script src="https://grapesjs.com/js/grapes.min.js?v0.14.43"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-carousel@0.3.11/dist/grapesjs-plugin-carousel.min.js"></script>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    <div class="form-group highlight-addon row field-loginform-name required">
        <label class="col-form-label has-star col-md-4" for="loginform-name">Имя пользователя</label>
        <div class="col-md-8">
            <input id="loginform-name" class="form-control" name="LoginForm[name]" placeholder="Введите Имя пользователя">
            <div class="help-block invalid-feedback"></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        showOffsets: 1,
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-plugin-carousel'],
        pluginsOpts: {
            'grapesjs-plugin-carousel': {
                some: 'value',
                prefixName:"bst-carousel",
                gridcategory:"Extra",
                autoplay:"true",
                interval:5000
            }
        }
    });
    window.editor = editor;
</script>
</body>
</html>
