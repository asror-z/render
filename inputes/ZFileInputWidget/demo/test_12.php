<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>

<!DOCTYPE html>
<!-- release v5.0.8, copyright 2014 - 2019 Kartik Visweswaran -->
<!--suppress JSUnresolvedLibraryURL -->
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>FileInput</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/js/fileinput.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/themes/explorer-fas/theme.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    

</head>
<body>
<label for="input-res-1">File Gallery</label>
<div class="file-loading">
    <input id="input-res-1" name="input-res-1[]" type="file" multiple>
</div>
<script>
    $(document).ready(function() {
        $("#input-res-1").fileinput({
            uploadUrl: "/core/tester/asror/upload.aspx?modelClassName=CoreInput&attribute=zfileinputwidget",
            enableResumableUpload: true,
            maxFileCount: 5,
            theme: 'fas',

        });
    });
</script>

</body>



</html>

