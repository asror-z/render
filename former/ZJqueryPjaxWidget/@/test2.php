<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
</head>

<body>
<div id="valtozo">
    This will be replaced.
</div>

<div id="pjax-container">
    This will be replaced.
<a href="/render/former/ZJqueryPjaxWidget/samplehtm.html" data-pjax="#valtozo">Show news</a>
</div>



<script>
    $(document).pjax('a', '#pjax-container');

</script>
</body>
</html>


