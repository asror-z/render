<?php


namespace zetsoft\widgets\inputes;

use yii\helpers\Url;
use zetsoft\system\kernels\ZWidget;

/**
 * Class ZFileInputWidget
 * @package zetsoft\widgets\inputes
 *
 * Created by: Doston Rakhmatov
 */
class ZFileInputSFFSFWidget extends ZWidget
{

    public const fileSuffix = '_XFile';
    public const fileAttrSuffix = '_XName';


    public $config = [];
    public $_config = [
        'maxFileCount' => 50,
        'uploadAsync' => false,
        'showCaption' => true,
        'showBrowse' => true,
        'showPreview' => true,
        'showRemove' => true,
        'showUpload' => true,
        'showCancel' => true,
        'showPause' => null,
        'showClose' => null,
        'browseOnZoneClick' => false,
        'autoOrientImageInitial' => true,
        'uploadUrlThumb' => null,
        'minFileCount' => 0,
        'overwriteInitial' => false,
        'allowedPreviewTypes' => ['image', 'html', 'text', 'video', 'audio', 'flash', 'object'],
        'initialPreview' => [],
        'isPluginLoading' => true,
        'allowFileTypes' => [
            'image',
            'html',
            'text',
            'video',
            'audio',
            'flash',
            'object'
        ],
        'initialPreviewConfig' => [],
    ];

    public $event = [];
    public $_event = [
        'filebatchuploadsuccess' => 'function() { console.log("ZFileInput | $eventFilebatchuploadsuccess") }',
        'filesuccessremove' => 'function() { console.log("ZFileInput | $eventFilebatchuploadsuccess") }',
        'filezoomshow' => 'function() { console.log("ZFileInput | $eventFilebatchuploadsuccess") }',
        'filebatchselected' => 'function() { console.log("ZFileInput | $eventFilebatchuploadsuccess") }'
    ];


    public function asset()
    {
        $this->fileCss('https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/css/fileinput.css');
        $this->fileJs('https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.0.8/js/fileinput.js');
    }


    /**
     * @inheritdoc
     */

    public function replace()
    {
        $model = bname($this->model::className());

        $sPrefix = "/{$this->moduleId}/{$this->controlId}";
        $sSuffix = "model={$model}&attribute={$this->attribute}";

        $uploadUrl = "{$sPrefix}/upload.aspx?{$sSuffix}";
        $deleteUrl = "{$sPrefix}/delete-file.aspx?{$sSuffix}&id={$this->model->id}";

        $value = $this->model->getAttribute($this->attribute);

        if ($value) {
            $files = explode(',', $value);
            $modelName = strtolower($model);
            $modelId = $this->model->id;
            $userId = Az::$app->cores->auth->identity->id;
            $fileArr = [];
            foreach ($files as $key => $file) {
                $fileName = str_replace(array('(', ')'), '_', $file);
                $fileArr[] = $file;
                $this->_config['initialPreview'][] = Url::to("@web/upload/{$modelName}/{$this->attribute}/{$modelId}/{$fileName}");
                $this->_config['initialPreviewConfig'][] = ['caption' => $file, 'key' => $file];
            }
            //$this->model->setAttribute($this->attribute,  $fileArr);
        }
        $name = "$model" . "[" . $this->attribute . "]";
        $this->_event['filesuccessremove'] = <<<JS
        function(event, id, index) {
            var el =  $("[name='$name']");
            var filesEl = el.val();
            var filesArr = [];
            $.each( filesEl.split(','), function( fileName, file ) {
                if(id === file) return ;
                fileName = file;
                filesArr.push(fileName);
            });
            
            el.val(filesArr);
            
        }
JS;
        $this->_event['filebatchuploadsuccess'] = <<<JS
        function(event, files) {
            var el =  $("[name='$name']");
            var filesEl = el.val();
            var filesArr = [];
            if(filesEl.length > 0)
             filesArr = filesEl.split(',');
            
            $.each( files.files, function( fileName, file ) {
                fileName = file.name;
                filesArr.push(fileName);
            });
            
            $("[name='$name']").val(filesArr);
        }
JS;

        $this->_event['filezoomshow'] = <<<JS
        function(event, files) {
            $("[class='modal-header']").attr('style', 'background: white');
            
            $("[class='glyphicon glyphicon-resize-vertical']").attr('class', 'fas fa-fw fa-arrows-alt-v');
            $("[class='glyphicon glyphicon-fullscreen']").attr('class', 'fas fa-fw fa-arrows-alt');
            $("[class='glyphicon glyphicon-resize-full']").attr('class', 'fas fa-fw fa-external-link-alt');
            $("[class='glyphicon glyphicon-remove']").attr('class', 'fas fa-fw fa-times');
        }
JS;

        $this->_event['filebatchselected'] = <<<JS
        function(event, files) {
            reformatIcons();
        }
JS;

        if (empty($this->_config['initialPreview'])) $this->_config['initialPreview'] = '[]';
        if (empty($this->_config['initialPreviewConfig'])) $this->_config['initialPreviewConfig'] = '[]';
        $this->js = strtr($this->js, [
            '{showCaption}' => $this->jscode($this->_config['showCaption']),
            '{showBrowse}' => $this->jscode($this->_config['showBrowse']),
            '{showPreview}' => $this->jscode($this->_config['showPreview']),
            '{showRemove}' => $this->jscode($this->_config['showRemove']),
            '{showUpload}' => $this->jscode($this->_config['showUpload']),
            '{showCancel}' => $this->jscode($this->_config['showCancel']),
            '{showPause}' => $this->jscode($this->_config['showPause']),
            '{showClose}' => $this->jscode($this->_config['showClose']),
            '{browseOnZoneClick}' => $this->jscode($this->_config['browseOnZoneClick']),
            '{autoOrientImageInitial}' => $this->jscode($this->_config['autoOrientImageInitial']),
            '{initialPreview}' => $this->jscode($this->_config['initialPreview']),
            '{initialPreviewConfig}' => $this->jscode($this->_config['initialPreviewConfig']),
            '{deleteUrl}' => $deleteUrl,
            '{allowedFileTypes}' => null,
            '{allowedFileExtensions}' => null,
            '{uploadUrl}' => $uploadUrl,
            '{uploadAsync}' => $this->jscode($this->_config['uploadAsync']),
            '{uploadUrlThumb}' => $this->jscode($this->_config['uploadUrlThumb']),
            '{maxFileCount}' => $this->jscode($this->_config['maxFileCount']),
            '{minFileCount}' => $this->jscode($this->_config['minFileCount']),
            '{filebatchuploadsuccess}' => $this->eventCode('filebatchuploadsuccess'),
            '{filesuccessremove}' => $this->eventCode('filesuccessremove'),
            '{filezoomshow}' => $this->eventCode('filezoomshow'),
            '{filebatchselected}' => $this->eventCode('filebatchselected'),
        ]);
    }

    public function codes()
    {
        $model = bname($this->model::className());
        $this->js = <<<JS
$(document).ready(function() {
    $("#$this->id").fileinput({
        language: 'en',
        showCaption: {showCaption},
        showBrowse: {showBrowse},
        showPreview: {showPreview},
        showRemove: {showRemove},
        showUpload: {showUpload},
        showUploadStats: true,
        showCancel: {showCancel},
        showPause: null,
        showClose: null,
        showUploadedThumbs: true,
        showConsoleLogs: true,
        browseOnZoneClick: {browseOnZoneClick},
        autoReplace: false,
        autoOrientImage: function () { // applicable for JPEG images only and non ios safari
            var ua = window.navigator.userAgent, webkit = !!ua.match(/WebKit/i),
                iOS = !!ua.match(/iP(od|ad|hone)/i), iOSSafari = iOS && webkit && !ua.match(/CriOS/i);
            return !iOSSafari;
        },
        autoOrientImageInitial: {autoOrientImageInitial},
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
        initialPreview: {initialPreview},
        initialPreviewDelimiter: '*$$*',
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        initialPreviewConfig: {initialPreviewConfig},
        initialPreviewThumbTags: [],
        previewThumbTags: {},
        initialPreviewShowDelete: true,
        initialPreviewDownloadUrl: '',
        removeFromPreviewOnError: false,
        deleteUrl: "{deleteUrl}",
        deleteExtraData: {},
        overwriteInitial: false,
        previewZoomButtonIcons: {
            prev: '<i class="glyphicon glyphicon-triangle-left"></i>',
            next: '<i class="glyphicon glyphicon-triangle-right"></i>',
            toggleheader: '<i class="glyphicon glyphicon-resize-vertical"></i>',
            fullscreen: '<i class="glyphicon glyphicon-fullscreen"></i>',
            borderless: '<i class="glyphicon glyphicon-resize-full"></i>',
            close: '<i class="glyphicon glyphicon-remove"></i>'
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
        previewFileIcon: '<i class="glyphicon glyphicon-file"></i>',
        previewFileIconClass: 'file-other-icon',
        previewFileIconSettings: {},
        previewFileExtSettings: {},
        buttonLabelClass: 'hidden-xs',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>&nbsp;',
        browseClass: 'btn btn-primary',
        removeIcon: '<i class="fas fa-trash"></i>',
        removeClass: 'btn btn-default btn-secondary',
        cancelIcon: '<i class="glyphicon glyphicon-ban-circle"></i>',
        cancelClass: 'btn btn-default btn-secondary',
        pauseIcon: '<i class="glyphicon glyphicon-pause"></i>',
        pauseClass: 'btn btn-default btn-secondary',
        uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
        uploadClass: 'btn btn-default btn-secondary',
        uploadUrl: "{uploadUrl}",
        uploadUrlThumb: "{uploadUrlThumb}",
        uploadAsync: {uploadAsync},
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
        minFileCount: {minFileCount},
        maxFileCount: {maxFileCount},
        validateInitialCount: false,
        msgValidationErrorClass: 'text-danger',
        msgValidationErrorIcon: '<i class="glyphicon glyphicon-exclamation-sign"></i> ',
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
        fileActionSettings: {},
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
        pdfRendererTemplate: '<iframe class="kv-preview-data file-preview-pdf" src="{renderer}?file={data}" {style}></iframe>'
    }).on('filesorted', function(e, params) {
        console.log('file sorted', e, params);
    }).on('fileuploaded', function(e, params) {
        console.log('file uploaded', e, params);
    }).on('filebatchuploadsuccess', {filebatchuploadsuccess}).on('filedeleted', {filesuccessremove})
    .on('filezoomshow', {filezoomshow}).on('filebatchselected', {filebatchselected});
    reformatIcons();
    function reformatIcons(){
        
     $("[class='glyphicon glyphicon-trash']").attr('class', 'fas fa-trash');
    $("[class='glyphicon glyphicon-zoom-in']").attr('class', 'fas fa-search-plus');
    $("[class='glyphicon glyphicon-move']").attr('class', 'fas fa-arrows-alt');
    $("[class='glyphicon glyphicon-file']").attr('class', 'fas fa-file kv-caption-icon');
    $("[class='glyphicon glyphicon-upload']").attr('class', 'fas fa-upload');
    $("[class='glyphicon glyphicon-ban-circle']").attr('class', 'fas fa-ban');
    $("[class='glyphicon glyphicon-folder-open']").attr('class', 'fas fa-folder-open');
    
    }
    
});
JS;
        $name = "$model" . "[" . $this->attribute . "][]";

        $this->htm = <<<HTML
    <div class="file-loading">
    <input id="$this->id" name="$name" type="file" multiple>
</div>

   <div class="file-name">
    <input id="$this->id" name="$name" type="hidden" value="nature-3">
    <input id="$this->id" name="$name" type="hidden" value="nature-3">
    <input id="$this->id" name="$name" type="hidden" value="nature-3">
</div>


HTML;

        $this->htm .= ZHHiddenInputWidget::widget([
            'model' => $this->model,
            'attribute' => $this->attribute,
        ]);
    }

}
