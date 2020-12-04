<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GrapesJS</title>
           <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
           <script src="https://unpkg.com/grapesjs"></script>
</head>
<body>

<div id="gjs"></div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container : '#gjs',
        components: '<div class="txt-red">Hello world!</div>',
        style: '.txt-red{color: red}',
    });
</script>

</body>
</html>
