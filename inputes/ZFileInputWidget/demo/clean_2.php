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
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-outline-secondary">Reset</button>
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
                "http://lorempixel.com/1920/1080/nature/1",
                "http://lorempixel.com/1920/1080/nature/2",
                "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewDelimiter: '*$$*',
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ],
            initialPreviewThumbTags: [],
            previewThumbTags: {},
            initialPreviewShowDelete: true,
            initialPreviewDownloadUrl: '',
            removeFromPreviewOnError: false,
            deleteUrl:'',
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
        .on('change', function(event)
            {
                console.log("change");
            })
        .on('fileselect', function(event, numFiles, label)
            {
            console.log("fileselect");
        })
        .on('fileselectnone', function(event)
        {
            console.log("Huh! No files were selected.");
        })

        .on('filebatchselected', function(event, files)
        {
            console.log('File batch selected triggered');
        })

        .on('fileclear', function(event)
        {
            console.log("fileclear");
        })

        .on('filecleared', function(event)
        {
            console.log("filecleared");
        })
            .on('filebeforeload', function(event, file, index, reader)
            {
                // perform your validations based on the 'file' or other parameters
                if (file.name === 'UNAPPROVED_FILE.txt') {
                    return false; // will abort the file loading for the selected file
                }
            })

        .on('fileloaded', function(event, file, previewId, index, reader) {
            console.log("fileloaded");
        })
        .on('filereset', function(event)
        {
            console.log("filereset");
        })
        .on('fileimageloaded', function(event, previewId)
        {
            console.log("fileimageloaded");
        })
        .on('fileimagesloaded', function(event)
        {
            console.log("fileimagesloaded");
        })
        .on('fileimageresized', function(event, previewId, index)
        {
            console.log("fileimageresized");
        })
        .on('fileimagesresized', function(event)
        {
            console.log("fileimagesresized");
        })
        .on('filebrowse', function(event)
        {
            console.log("File browse triggered.");
        })
        .on('filelock', function(event, filestack, extraData)
        {
            var fstack = [];
            $.each(filestack, function(fileId, file)
            {
                if (file) {
                    fstack.push(file);
                }
            });
            console.log('Files selected - ' + fstack.length);
        })
        .on('filelock', function(event, filestack, extraData)
        {
            var fstack = [];
            $.each(filestack, function(fileId, file)
            {
                if (file) {
                    fstack.push(file);
                }
            });
            console.log('Files selected - ' + fstack.length);
        })
        .on('filepreremove', function(event, id, index)
        {
            console.log('id = ' + id + ', index = ' + index);
        })
        .on('fileremoved', function(event, id, index)
        {
            console.log('id = ' + id + ', index = ' + index);
        })
        .on('filebeforedelete', function(event, key, data)
            {
                console.log('Key = ' + key);
            })
        .on('filepredelete', function(event, key, jqXHR, data)
        {
            console.log('Key = ' + key);
        })
        .on('filedeleted', function(event, key, jqXHR, data)
        {
            console.log('Key = ' + key);
        })
        .on('filepreajax', function(event, previewId, index)
        {
            console.log('File pre ajax triggered');
        })
        .on('filepreupload', function(event, data, previewId, index)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File pre upload triggered');
        })
        .on('fileuploaded', function(event, previewId, index, fileId)
        {
            console.log('File uploaded', previewId, index, fileId);
        })
        .on('fileuploaded', function(event, data, previewId, index)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File uploaded triggered');
        })
        .on('flebatchpreupload', function(event, data)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File batch pre upload');
        })
        .on('filebatchuploadsuccess', function(event, data)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File batch upload success');
        })
        .on('filebatchuploadcomplete', function(event, preview, config, tags, extraData)
        {
            console.log('File batch upload complete', preview, config, tags, extraData);
        })
        .on('filebatchuploadcomplete', function(event, files, extra)
        {
            console.log('File batch upload complete');
        })
        .on('filesuccessremove', function(event, id)
        {
            if (some_processing_function(id)) {
                console.log('Uploaded thumbnail successfully removed');
            } else {
                return false; // abort the thumbnail removal
            }
        })
        .on('filedisabled', function(event)
        {
            console.log('File disabled');
        })
        .on('fileenabled', function(event)
        {
            console.log('File enabled');
        })
        .on('filesorted', function(event, params)
        {
            console.log('File sorted ', params.previewId, params.oldIndex, params.newIndex, params.stack);
        })
        .on('filezoomshow', function(event, params)
        {
            console.log('File zoom show ', params.sourceEvent, params.previewId, params.modal);
        })
        .on('filezoomshown', function(event, params)
        {
            console.log('File zoom shown ', params.sourceEvent, params.previewId, params.modal);
        })
        .on('filezoomhide', function(event, params)
        {
            console.log('File zoom hide ', params.sourceEvent, params.previewId, params.modal);
        })
        .on('filezoomhidden', function(event, params)
        {
            console.log('File zoom hidden ', params.sourceEvent, params.previewId, params.modal);
        })
        .on('filezoomloaded', function(event, params)
        {
            console.log('File zoom loaded ', params.sourceEvent, params.previewId, params.modal);
        })
        .on('filezoomprev', function(event, params)
        {
            console.log('File zoom previous ', params.previewId, params.modal);
        })
        .on('filezoomnext', function(event, params)
        {
            console.log('File zoom next ', params.previewId, params.modal);
        })
        .on('filechunkbeforesend', function(event, previewId, index, retry, fm, rm, data)
        {
            console.log('filechunkbeforesend', previewId, index, retry);
        })
        .on('filechunksuccess', function(event, previewId, index, retry, fm, rm, data)
        {
            console.log('filechunksuccess', previewId, index, retry);
        })
        .on('filechunkerror', function(event, previewId, index, retry, fm, rm, data)
        {
            console.log('filechunkerror', previewId, index, retry);
        })
        .on('filechunkajaxerror', function(event, previewId, index, retry, fm, rm, data)
        {
            console.log('filechunkajaxerror', previewId, index, retry);
        })
        .on('filechunkcomplete', function(event, previewId, index, retry, fm, rm, data)
        {
            console.log('filechunkcomplete', previewId, index, retry);
        })

        .on('filetestbeforesend', function(event, fileId, fm, rm, data)
        {
            console.log('filetestbeforesend', fileId, fm, rm, data);
        })
        .on('filetestsuccess', function(event, fileId, fm, rm, data)
        {
            console.log('filetestsuccess', fileId, fm, rm, data);
        })
        .on('filetesterror', function(event, fileId, fm, rm, data)
        {
            console.log('filetesterror', fileId, fm, rm, data);
        })
        .on('filetestajaxerror', function(event, fileId, fm, rm, data)
        {
            console.log('filetestajaxerror', fileId, fm, rm, data);
        })
        .on('filetestcomplete', function(event, fileId, fm, rm, data)
        {
            console.log('filetestcomplete', fileId, fm, rm, data);
        })
        .on('fileerror', function(event, data, msg)
        {
            console.log(data.id);
            console.log(data.index);
            console.log(data.file);
            console.log(data.reader);
            console.log(data.files);
            // get message
            alert(msg);
        })
        .on('fileduplicateerror', function(event, file, fileId, caption, size, id, index)
        {
            console.log(file);
            console.log(fileId);
            console.log(size);
            console.log(id);
            console.log(index);
            console.log(caption);
        })

        .on('fileimageresizeerror', function(event, data, msg)
        {
            console.log(data.id);
            console.log(data.index);
            // get message
            alert(msg);
        })
        .on('fileuploaderror', function(event, data, msg)
        {
            console.log('File uploaded', data.previewId, data.index, data.fileId, msg);
        })
        .on('fileuploaderror', function(event, data, msg)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File upload error');
            // get message
            alert(msg);
        })

        .on('filebatchuploaderror', function(event, data, msg)
        {
            var form = data.form, files = data.files, extra = data.extra,
                response = data.response, reader = data.reader;
            console.log('File batch upload error');
            // get message
            alert(msg);
        })
        .on('filedeleteerror', function(event, data, msg)
        {
            console.log('File delete error');
            // get message
            alert(msg);
        })
        .on('filefoldererror', function(event, folders, msg)
        {
            console.log('File folder dropped error');
            // get message
            alert(msg);
        })
        .on('filecustomerror', function(event, params, msg)
        {
            console.log(params.id);
            console.log(params.index);
            console.log(params.data);
            // get message
            alert(msg);
        })
        .on('filepreupload', function(event, data, previewId, index, jqXHR)
        {
            // do your validation and return an error like below
            if (customValidationFailed) {
                return {
                    message: 'You are not allowed to do that',
                    data: {key1: 'Key 1', detail1: 'Detail 1'}
                };
            }
        });
    });
</script>

</html>

