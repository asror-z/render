<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/js/fileinput.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.js"></script>

</head>
<body>
<!-- Include initial preview count -->
<div class="file-loading">
    <input id="input-freqd-2" name="input-freqd-2[]" multiple type="file" accept="image/*">
</div>
<hr>
<div class="text-center">
    <button type="button" class="btn btn-lg btn-success btn-upload-4"><i class="fa fa-upload"></i> Upload</button>
    <button type="button" class="btn btn-lg btn-secondary btn-reset-4"><i class="fa fa-ban"></i> Clear</button>
</div>
<script>
    $("#input-freqd-2").fileinput({
        uploadUrl: "/core/tester/asror/upload.aspx?modelClassName=CoreInput&attribute=zfileinputwidget",
        showUpload: false,
        showRemove: false,
        required: true,
        validateInitialCount: true,
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
            "http://lorempixel.com/800/460/animals/6"
        ],
        initialPreviewConfig: [
            {caption: "Animals-6.jpg", size: 628782, width: "120px", url: "/site/file-delete", key: 1}
        ],
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
    $(".btn-upload-4").on("click", function() {
        $("#input-freqd-2").fileinput('upload');
    });
    $(".btn-reset-4").on("click", function() {
        $("#input-freqd-2").fileinput('clear');
    });
</script>
</body>
</html>
