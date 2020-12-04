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

</head>
<body>
<div class="container my-4">
    <form enctype="multipart/form-data">
        <div class="file-loading">
            <input id="kv-explorer" type="file" multiple>
        </div>
        <div class="file-name" id="file-name">

        </div>
        <div class="file-inputs" id="file-inputs">
           
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-outline-secondary">Reset</button>
        <button type="button" class="btn btn-success" id="plus">+</button>
        <button type="button" class="btn btn-warning" id="minus">-</button>
    </form>
</div>
</body>
<script>


    $(document).ready(function () {
        $("#kv-explorer").fileinput({
            language: 'en',
            showCaption: true,
            showBrowse: true,
            showPreview: true,
            showRemove: true,
            showUpload: true,
            showUploadStats: true,
            showCancel: null,
            showPause: null,
            showClose: null,
            showUploadedThumbs: true,
            showConsoleLogs: true,
            browseOnZoneClick: false,
            autoReplace: false,
            autoOrientImage: function () { // applicable for JPEG images only and non ios safari
                var ua = window.navigator.userAgent, webkit = !!ua.match(/WebKit/i),
                    iOS = !!ua.match(/iP(od|ad|hone)/i), iOSSafari = iOS && webkit && !ua.match(/CriOS/i);
                return !iOSSafari;
            },
            autoOrientImageInitial: true,
            required: false,
            rtl: false,
            hideThumbnailContent: false,
            encodeUrl: true,
            generateFileId: null,
            previewClass: '',
            captionClass: '',
            frameClass: 'krajee-default',
            mainClass: 'file-caption-main',
            mainTemplate: null,
            purifyHtml: true,
            fileSizeGetter: null,
            initialCaption: '',
            initialPreview: [
                
            ],
            initialPreviewDelimiter: '*$$*',
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            initialPreviewConfig: [
            ],
            initialPreviewThumbTags: [],
            previewThumbTags: {},
            initialPreviewShowDelete: true,
            initialPreviewDownloadUrl: '',
            removeFromPreviewOnError: false,
            deleteUrl: '',
            deleteExtraData: {},
            overwriteInitial: false,
            previewZoomButtonIcons: {
                prev: '<i class="fa fa-arrow-left"></i>',
                next: '<i class="fa fa-arrow-right"></i>',
                toggleheader: '<i class="fa fa-angle-up"></i>',
                fullscreen: '<i class="fa fa-arrows-alt"></i>',
                borderless: '<i class="fas fa-external-link-square-alt"></i>',
                close: '<i class="fa fa-times"></i>'
            },
            previewZoomButtonClasses: {
                prev: 'btn btn-navigate',
                next: 'btn btn-navigate',
                toggleheader: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                fullscreen: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                borderless: 'btn btn-sm btn-kv btn-default btn-outline-secondary',
                close: 'btn btn-sm btn-kv btn-default btn-outline-secondary'
            },
            previewTemplates: {},
            previewContentTemplates: {},
            preferIconicPreview: false,
            preferIconicZoomPreview: false,
            allowedFileTypes: null,
            allowedFileExtensions: null,
            allowedPreviewTypes: undefined,
            allowedPreviewMimeTypes: null,
            allowedPreviewExtensions: null,
            disabledPreviewTypes: undefined,
            disabledPreviewExtensions: ['msi', 'exe', 'com', 'zip', 'rar', 'app', 'vb', 'scr'],
            disabledPreviewMimeTypes: null,
            defaultPreviewContent: null,
            customLayoutTags: {},
            customPreviewTags: {},
            previewFileIcon: '<i class="fa fa-times"></i>',
            previewFileIconClass: 'file-other-icon',
            previewFileIconSettings: {},
            previewFileExtSettings: {},
            buttonLabelClass: 'hidden-xs',
            browseIcon: '<i class="fab fa-internet-explorer"></i>&nbsp;',
            browseClass: 'btn btn-primary',
            removeIcon: '<i class="fa fa-remove-format"></i>',
            removeClass: 'btn btn-default btn-secondary',
            cancelIcon: '<i class="fa fa-cloud-download"></i>',
            cancelClass: 'btn btn-default btn-secondary',
            pauseIcon: '<i class="glyphicon glyphicon-pause"></i>',
            pauseClass: 'btn btn-default btn-secondary',
            uploadIcon: '<i class="fa fa-upload"></i>',
            uploadClass: 'btn btn-default btn-secondary',
            uploadUrl: null,
            uploadUrlThumb: null,
            uploadAsync: true,
            uploadParamNames: {
                chunkCount: 'chunkCount',
                chunkIndex: 'chunkIndex',
                chunkSize: 'chunkSize',
                chunkSizeStart: 'chunkSizeStart',
                chunksUploaded: 'chunksUploaded',
                fileBlob: 'fileBlob',
                fileId: 'fileId',
                fileName: 'fileName',
                fileRelativePath: 'fileRelativePath',
                fileSize: 'fileSize',
                retryCount: 'retryCount'
            },
            maxAjaxThreads: 5,
            processDelay: 100,
            queueDelay: 10, // must be lesser than process delay
            progressDelay: 0, // must be lesser than process delay
            enableResumableUpload: false,
            resumableUploadOptions: {
                fallback: null,
                testUrl: null, // used for checking status of chunks/ files previously / partially uploaded
                chunkSize: 2 * 1024, // in KB
                maxThreads: 4,
                maxRetries: 3,
                showErrorLog: true
            },
            uploadExtraData: {},
            zoomModalHeight: 480,
            minImageWidth: null,
            minImageHeight: null,
            maxImageWidth: null,
            maxImageHeight: null,
            resizeImage: false,
            resizePreference: 'width',
            resizeQuality: 0.92,
            resizeDefaultImageType: 'image/jpeg',
            resizeIfSizeMoreThan: 0, // in KB
            minFileSize: 0,
            maxFileSize: 0,
            maxFilePreviewSize: 25600, // 25 MB
            minFileCount: 0,
            maxFileCount: 0,
            validateInitialCount: false,
            msgValidationErrorClass: 'text-danger',
            msgValidationErrorIcon: '<i class="fa fancybox-error"></i>',
            msgErrorClass: 'file-error-message',
            progressThumbClass: 'progress-bar progress-bar-striped active',
            progressClass: 'progress-bar bg-success progress-bar-success progress-bar-striped active',
            progressInfoClass: 'progress-bar bg-info progress-bar-info progress-bar-striped active',
            progressCompleteClass: 'progress-bar bg-success progress-bar-success',
            progressPauseClass: 'progress-bar bg-primary progress-bar-primary progress-bar-striped active',
            progressErrorClass: 'progress-bar bg-danger progress-bar-danger',
            progressUploadThreshold: 99,
            previewFileType: 'image',
            elCaptionContainer: null,
            elCaptionText: null,
            elPreviewContainer: null,
            elPreviewImage: null,
            elPreviewStatus: null,
            elErrorContainer: null,
            slugCallback: null,
            dropZoneEnabled: true,
            dropZoneTitleClass: 'file-drop-zone-title',
            fileActionSettings: {
                removeIcon: '<i class="fas fa-trash-alt"></i>',
                uploadIcon: '<i class="fas fa-upload"></i>',
                uploadRetryIcon: '<i class="fas fa-redo-alt"></i>',
                downloadIcon: '<i class="fas fa-download"></i>',
                zoomIcon: '<i class="fas fa-search-plus"></i>',
                dragIcon: '<i class="fas fa-arrows-alt"></i>',
                indicatorNew: '<i class="fas fa-plus-circle text-warning"></i>',
                indicatorSuccess: '<i class="fas fa-check-circle text-success"></i>',
                indicatorError: '<i class="fas fa-exclamation-circle text-danger"></i>',
                indicatorLoading: '<i class="fas fa-hourglass text-muted"></i>',
                indicatorPaused: '<i class="fa fa-pause text-info"></i>',
            },
            otherActionButtons: '',
            textEncoding: 'UTF-8',
            ajaxSettings: {},
            ajaxDeleteSettings: {},
            showAjaxErrorDetails: true,
            mergeAjaxCallbacks: false,
            mergeAjaxDeleteCallbacks: false,
            retryErrorUploads: true,
            reversePreviewOrder: false,
            usePdfRenderer: function () {
                //noinspection JSUnresolvedVariable
                var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
                return !!navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/i) || isIE11;
            },
            pdfRendererUrl: '',
        })
            .on('change', function (event) {
                console.log("change");
                console.log("ZFileInputWidget | 'change'");
                console.log(event);
            })
            .on('fileselect', function (event, numFiles, label) {
                console.log("fileselect");
                console.log("ZFileInputWidget | 'fileselect'");
                console.log(event, numFiles, label);
                var inputs = "<div id='one' class='one'> <input type='text' id > </div>";
                $('#file-inputs').append(inputs);
                $('#').val(label);
                console.log('appended');
            })
            .on('fileselectnone', function (event) {
                console.log("Huh! No files were selected.");
                console.log("ZFileInputWidget | 'fileselectnone'");
                console.log(event);
            })

            .on('filebatchselected', function (event, files) {
                console.log('File batch selected triggered');
                console.log("ZFileInputWidget | 'filebatchselected'");
                console.log(event, files);
            })

            .on('fileclear', function (event) {
                console.log("fileclear");
                console.log("ZFileInputWidget | 'fileclear'");
                console.log(event);
            })

            .on('filecleared', function (event) {
                console.log("filecleared");
                console.log("ZFileInputWidget | 'filecleared'");
                console.log(event);
            })
            .on('filebeforeload', function (event, file, index, reader) {
                // perform your validations based on the 'file' or other parameters
                if (file.name === 'UNAPPROVED_FILE.txt') {
                    return false; // will abort the file loading for the selected file
                }
                console.log("ZFileInputWidget | 'filebeforeload'");
                console.log(event, file, index, reader);
            })
            .on('fileloaded', function (event, file, previewId, index, reader) {
                console.log("fileloaded");
                console.log("ZFileInputWidget | 'fileloaded'");
                console.log(event, file, previewId, index, reader);
            })
            .on('filereset', function (event) {
                console.log("filereset");
                console.log("ZFileInputWidget | 'filereset'");
                console.log(event);
            })
            .on('fileimageloaded', function (event, previewId) {
                console.log("fileimageloaded");
                console.log("ZFileInputWidget | 'fileimageloaded'");
                console.log(event, previewId);
            })
            .on('fileimagesloaded', function (event) {
                console.log("fileimagesloaded");
                console.log("ZFileInputWidget | 'fileimagesloaded'");
                console.log(event);
            })
            .on('fileimageresized', function (event, previewId, index) {
                console.log("fileimageresized");
                console.log("ZFileInputWidget | 'fileimageresized'");
                console.log(event, previewId, index);
            })
            .on('fileimagesresized', function (event) {
                console.log("fileimagesresized");
                console.log("ZFileInputWidget | 'fileimagesresized'");
                console.log(event);
            })
            .on('filebrowse', function (event) {
                console.log("File browse triggered.");
                console.log("ZFileInputWidget | 'filebrowse'");
                console.log(event);
            })
            .on('filelock', function (event, filestack, extraData) {
                var fstack = [];
                $.each(filestack, function (fileId, file) {
                    if (file) {
                        fstack.push(file);
                    }
                });
                console.log('Files selected - ' + fstack.length);
                console.log("ZFileInputWidget | 'filelock'");
                console.log(event, filestack, extraData);
            })
            .on('filepreremove', function (event, id, index) {
                console.log('id = ' + id + ', index = ' + index);
                console.log("ZFileInputWidget | 'filepreremove'");
                console.log(event, id, index);
            })
            .on('fileremoved', function (event, id, index) {
                console.log('id = ' + id + ', index = ' + index);
                console.log("ZFileInputWidget | 'fileremoved'");
                console.log(event, id, index);
            })
            .on('filebeforedelete', function (event, key, data) {
                console.log('Key = ' + key);
                console.log("ZFileInputWidget | 'filebeforedelete'");
                console.log(event, key, data);
            })
            .on('filepredelete', function (event, key, jqXHR, data) {
                console.log('Key = ' + key);
                console.log("ZFileInputWidget | 'filepredelete'");
                console.log(event, key, jqXHR, data);
            })
            .on('filedeleted', function (event, key, jqXHR, data) {
                console.log('Key = ' + key);
                console.log("ZFileInputWidget | 'filedeleted'");
                console.log(event, key, jqXHR, data);
            })
            .on('filepreajax', function (event, previewId, index) {
                console.log('File pre ajax triggered');
                console.log("ZFileInputWidget | 'filepreajax'");
                console.log(event, previewId, index);
            })
            .on('filepreupload', function (event, data, previewId, index) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File pre upload triggered');
                console.log("ZFileInputWidget | 'filepreupload'");
                console.log(event, data, previewId, index);
            })
            .on('fileuploaded', function (event, previewId, index, fileId) {
                console.log("ZFileInputWidget | 'fileuploaded'");
                console.log(event, previewId, index, fileId);
            })
            .on('fileuploaded', function (event, data, previewId, index) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File uploaded triggered');
                console.log("ZFileInputWidget | 'fileuploaded'");
                console.log(event, data, previewId, index);
            })
            .on('flebatchpreupload', function (event, data) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File batch pre upload');
                console.log("ZFileInputWidget | 'flebatchpreupload'");
                console.log(event, data);
            })
            .on('filebatchuploadsuccess', function (event, data) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File batch upload success');
                console.log("ZFileInputWidget | 'filebatchuploadsuccess'");
                console.log(event, data);
            })
            .on('filebatchuploadcomplete', function (event, preview, config, tags, extraData) {
                console.log("ZFileInputWidget | 'filebatchuploadcomplete'");
                console.log(event, preview, config, tags, extraData);
            })
            .on('filebatchuploadcomplete', function (event, files, extra) {
                console.log('File batch upload complete');
                console.log("ZFileInputWidget | 'filebatchuploadcomplete'");
                console.log(event, files, extra);
            })
            .on('filesuccessremove', function (event, id) {
                if (some_processing_function(id)) {
                    console.log('Uploaded thumbnail successfully removed');
                } else {
                    return false; // abort the thumbnail removal
                }
                console.log("ZFileInputWidget | 'filesuccessremove'");
                console.log(event, id);
            })
            .on('filedisabled', function (event) {
                console.log("ZFileInputWidget | 'filedisabled'");
                console.log(event);
            })
            .on('fileenabled', function (event) {
                console.log("ZFileInputWidget | 'fileenabled'");
                console.log(event);
            })
            .on('filesorted', function (event, params) {
                console.log("ZFileInputWidget | 'filesorted'");
                console.log(event, params.previewId, params.oldIndex, params.newIndex, params.stack);
            })
            .on('filezoomshow', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomshow'");
                console.log(event, params.sourceEvent, params.previewId, params.modal);
            })
            .on('filezoomshown', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomshown'");
                console.log(event, params.sourceEvent, params.previewId, params.modal);
            })
            .on('filezoomhide', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomhide'");
                console.log(event, params.sourceEvent, params.previewId, params.modal);
            })
            .on('filezoomhidden', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomhidden'");
                console.log(event, params.sourceEvent, params.previewId, params.modal);
            })
            .on('filezoomloaded', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomloaded'");
                console.log(event, params.sourceEvent, params.previewId, params.modal);
            })
            .on('filezoomprev', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomprev'");
                console.log(event, params.previewId, params.modal);
            })
            .on('filezoomnext', function (event, params) {
                console.log("ZFileInputWidget | 'filezoomnext'");
                console.log(event, params.previewId, params.modal);
            })
            .on('filechunkbeforesend', function (event, previewId, index, retry, fm, rm, data) {
                console.log("ZFileInputWidget | 'filechunkbeforesend'");
                console.log(event, previewId, index, retry, fm, rm, data);
            })
            .on('filechunksuccess', function (event, previewId, index, retry, fm, rm, data) {
                console.log("ZFileInputWidget | 'filechunksuccess'");
                console.log(event, previewId, index, retry, fm, rm, data);
            })
            .on('filechunkerror', function (event, previewId, index, retry, fm, rm, data) {
                console.log("ZFileInputWidget | 'filechunkerror'");
                console.log(event, previewId, index, retry, fm, rm, data);
            })
            .on('filechunkajaxerror', function (event, previewId, index, retry, fm, rm, data) {
                console.log("ZFileInputWidget | 'filechunkajaxerror'");
                console.log(event, previewId, index, retry, fm, rm, data);
            })
            .on('filechunkcomplete', function (event, previewId, index, retry, fm, rm, data) {
                console.log("ZFileInputWidget | 'filechunkcomplete'");
                console.log(event, previewId, index, retry, fm, rm, data);
            })

            .on('filetestbeforesend', function (event, fileId, fm, rm, data) {
                console.log("ZFileInputWidget | 'filetestbeforesend'");
                console.log(event, fileId, fm, rm, data);
            })
            .on('filetestsuccess', function (event, fileId, fm, rm, data) {
                console.log("ZFileInputWidget | filetestsuccess");
                console.log(event, fileId, fm, rm, data);
            })
            .on('filetesterror', function (event, fileId, fm, rm, data) {
                console.log("ZFileInputWidget | filetesterror");
                console.log(event, fileId, fm, rm, data);
            })
            .on('filetestajaxerror', function (event, fileId, fm, rm, data) {
                console.log("ZFileInputWidget | filetestajaxerror");
                console.log(event, fileId, fm, rm, data);
            })
            .on('filetestcomplete', function (event, fileId, fm, rm, data) {
                console.log("ZFileInputWidget | filetestcomplete");
                console.log(event, fileId, fm, rm, data);
            })
            .on('fileerror', function (event, data, msg) {
                console.log("ZFileInputWidget | fileerror");
                console.log(event, data, msg);
            })
            .on('fileduplicateerror', function (event, file, fileId, caption, size, id, index) {
                console.log(file);
                console.log(fileId);
                console.log(size);
                console.log(id);
                console.log(index);
                console.log(caption);
                console.log("ZFileInputWidget | 'fileduplicateerror'");
                console.log(event, file, fileId, caption, size, id, index);
            })

            .on('fileimageresizeerror', function (event, data, msg) {
                console.log(data.id);
                console.log(data.index);
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'fileimageresizeerror'");
                console.log(event, data, msg);
            })
            .on('fileuploaderror', function (event, data, msg) {
                console.log("ZFileInputWidget | 'fileuploaderror'");
                console.log(event, data, msg);
            })
            .on('fileuploaderror', function (event, data, msg) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File upload error');
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'fileuploaderror'");
                console.log(event, data, msg);
            })

            .on('filebatchuploaderror', function (event, data, msg) {
                var form = data.form, files = data.files, extra = data.extra,
                    response = data.response, reader = data.reader;
                console.log('File batch upload error');
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'filebatchuploaderror'");
                console.log(event, data, msg);
            })
            .on('filedeleteerror', function (event, data, msg) {
                console.log('File delete error');
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'filedeleteerror'");
                console.log(event, data, msg);
            })
            .on('filefoldererror', function (event, folders, msg) {
                console.log('File folder dropped error');
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'filefoldererror'");
                console.log(event, folders, msg);
            })
            .on('filecustomerror', function (event, params, msg) {
                console.log(params.id);
                console.log(params.index);
                console.log(params.data);
                // get message
                alert(msg);
                console.log("ZFileInputWidget | 'filecustomerror'");
                console.log(event, params, msg);
            })
            .on('filepreupload', function (event, data, previewId, index, jqXHR) {
                // do your validation and return an error like below
                if (customValidationFailed) {
                    return {
                        message: 'You are not allowed to do that',
                        data: {key1: 'Key 1', detail1: 'Detail 1'}
                    };
                }
                console.log("ZFileInputWidget | 'filepreupload'");
                console.log(event, data, previewId, index, jqXHR);
            });

    });
</script>
<script>

    $(document).ready(function () {
        $('#plus').on('click', function () {

            var add = "<div id='one' class='one'> <input type='text' id='two' class='two'> </div>";
            $('#file-name').append(add);
            console.log('appended');
            $('#two').val();
            
        }),

            $('#minus').click( function () {

                $("#one").remove();
                console.log('deleted');
            })
    })
</script>
<script>



</script>

</html>

