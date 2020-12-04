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
    <input id="input-freqd-1" name="input-freqd-1[]" multiple type="file" accept="image/*">
</div>
<hr>
<div class="text-center">
    <button type="button" class="btn btn-lg btn-success btn-upload-3"><i class="fa fa-upload"></i> Upload</button>
    <button type="button" class="btn btn-lg btn-secondary btn-reset-3"><i class="fa fa-ban"></i> Clear</button>
    <button type="submit" class="btn btn-lg btn-danger btn-submit-3"><i class="fas fa-arrow-circle-up"> Submit </i></button>
</div>

<script>
    $("#input-freqd-1").fileinput({
        uploadUrl: "/core/tester/asror/upload.aspx?modelClassName=CoreInput&attribute=zfileinputwidget",
        showUpload: false,
        showRemove: false,
        required: true,
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
    $(".btn-upload-3").on("click", function() {
        $("#input-freqd-1").fileinput('upload');
    });
    $(".btn-reset-3").on("click", function() {
        $("#input-freqd-1").fileinput('clear');
    });
</script>
</body>
</html>
