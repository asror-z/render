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







<div class="file-loading">
    <input id="input-fcount-1" name="input-fcount-1[]" multiple type="file" accept="image/*">
</div>
<script>
    $("#input-fcount-1").fileinput({
        uploadUrl: "/file-upload-batch/2",
        maxFileCount: 4,
        validateInitialCount: true,
        overwriteInitial: false,
        initialPreview: [
            "<img class='kv-preview-data file-preview-image' src='https://placeimg.com/800/460/nature'>",
            "<img class='kv-preview-data file-preview-image' src='https://placeimg.com/800/460/nature'>",
            "<img class='kv-preview-data file-preview-image' src='https://placeimg.com/800/460/nature'>"
        ],
        initialPreviewConfig: [
            {caption: "Nature-1.jpg", size: 628782, width: "120px", url: "/site/file-delete", key: 1},
            {caption: "Nature-2.jpg", size: 982873, width: "120px", url: "/site/file-delete", key: 2},
            {caption: "Nature-3.jpg", size: 567728, width: "120px", url: "/site/file-delete", key: 3}
        ],
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
</script>
</body>
</html>
