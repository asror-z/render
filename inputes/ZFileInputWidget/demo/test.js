/**
 *
 * Author:  Asror Zakirov
 * Created: 1/3/2020 4:13 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */



.on('change', function(event)
{
    console.log("change");
});
.on('fileselect', function(event, numFiles, label)
{
    console.log("fileselect");
});
.on('fileselectnone', function(event)
{
    console.log("Huh! No files were selected.");
});
.on('filebatchselected', function(event, files)
{
    console.log('File batch selected triggered');
});
.on('fileclear', function(event)
{
    console.log("fileclear");
});
.on('filecleared', function(event)
{
    console.log("filecleared");
});
.on('filebeforeload', function(event, file, index, reader)
{
    // perform your validations based on the 'file' or other parameters
    if (file.name === 'UNAPPROVED_FILE.txt') {
        return false; // will abort the file loading for the selected file
    }
});
.on('fileloaded', function(event, file, previewId, index, reader) {
    console.log("fileloaded");
});
.on('filereset', function(event)
{
    console.log("filereset");
});
.on('fileimageloaded', function(event, previewId)
{
    console.log("fileimageloaded");
});
.on('fileimagesloaded', function(event)
{
    console.log("fileimagesloaded");
});
.on('fileimageresized', function(event, previewId, index)
{
    console.log("fileimageresized");
});
.on('fileimagesresized', function(event)
{
    console.log("fileimagesresized");
});
.on('filebrowse', function(event)
{
    console.log("File browse triggered.");
});
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
});
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
});
.on('filepreremove', function(event, id, index)
{
    console.log('id = ' + id + ', index = ' + index);
});
.on('fileremoved', function(event, id, index)
{
    console.log('id = ' + id + ', index = ' + index);
})
.on('filebeforedelete', function(event, key, data)
{
    console.log('Key = ' + key);
});
.on('filepredelete', function(event, key, jqXHR, data)
{
    console.log('Key = ' + key);
});
.on('filedeleted', function(event, key, jqXHR, data)
{
    console.log('Key = ' + key);
});
.on('filepreajax', function(event, previewId, index)
{
    console.log('File pre ajax triggered');
});
.on('filepreupload', function(event, data, previewId, index)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File pre upload triggered');
});
.on('fileuploaded', function(event, previewId, index, fileId)
{
    console.log('File uploaded', previewId, index, fileId);
});
.on('fileuploaded', function(event, data, previewId, index)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File uploaded triggered');
});
.on('filebatchpreupload', function(event, data)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File batch pre upload');
});
.on('filebatchuploadsuccess', function(event, data)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File batch upload success');
});
.on('filebatchuploadcomplete', function(event, preview, config, tags, extraData)
{
    console.log('File batch upload complete', preview, config, tags, extraData);
});
.on('filebatchuploadcomplete', function(event, files, extra)
{
    console.log('File batch upload complete');
});
.on('filesuccessremove', function(event, id)
{
    if (some_processing_function(id)) {
        console.log('Uploaded thumbnail successfully removed');
    } else {
        return false; // abort the thumbnail removal
    }
});
.on('filedisabled', function(event)
{
    console.log('File disabled');
});
.on('fileenabled', function(event)
{
    console.log('File enabled');
});
.on('filesorted', function(event, params)
{
    console.log('File sorted ', params.previewId, params.oldIndex, params.newIndex, params.stack);
});
.on('filezoomshow', function(event, params)
{
    console.log('File zoom show ', params.sourceEvent, params.previewId, params.modal);
});
.on('filezoomshown', function(event, params)
{
    console.log('File zoom shown ', params.sourceEvent, params.previewId, params.modal);
});
.on('filezoomhide', function(event, params)
{
    console.log('File zoom hide ', params.sourceEvent, params.previewId, params.modal);
});
.on('filezoomhidden', function(event, params)
{
    console.log('File zoom hidden ', params.sourceEvent, params.previewId, params.modal);
});
.on('filezoomloaded', function(event, params)
{
    console.log('File zoom loaded ', params.sourceEvent, params.previewId, params.modal);
});
.on('filezoomprev', function(event, params)
{
    console.log('File zoom previous ', params.previewId, params.modal);
});
.on('filezoomnext', function(event, params)
{
    console.log('File zoom next ', params.previewId, params.modal);
});
.on('filechunkbeforesend', function(event, previewId, index, retry, fm, rm, data)
{
    console.log('filechunkbeforesend', previewId, index, retry);
});
.on('filechunksuccess', function(event, previewId, index, retry, fm, rm, data)
{
    console.log('filechunksuccess', previewId, index, retry);
});
.on('filechunkerror', function(event, previewId, index, retry, fm, rm, data)
{
    console.log('filechunkerror', previewId, index, retry);
});
.on('filechunkajaxerror', function(event, previewId, index, retry, fm, rm, data)
{
    console.log('filechunkajaxerror', previewId, index, retry);
});
.on('filechunkcomplete', function(event, previewId, index, retry, fm, rm, data)
{
    console.log('filechunkcomplete', previewId, index, retry);
});
.on('filetestbeforesend', function(event, fileId, fm, rm, data)
{
    console.log('filetestbeforesend', fileId, fm, rm, data);
});
.on('filetestsuccess', function(event, fileId, fm, rm, data)
{
    console.log('filetestsuccess', fileId, fm, rm, data);
});
.on('filetesterror', function(event, fileId, fm, rm, data)
{
    console.log('filetesterror', fileId, fm, rm, data);
});
.on('filetestajaxerror', function(event, fileId, fm, rm, data)
{
    console.log('filetestajaxerror', fileId, fm, rm, data);
});
.on('filetestcomplete', function(event, fileId, fm, rm, data)
{
    console.log('filetestcomplete', fileId, fm, rm, data);
});
.on('fileerror', function(event, data, msg)
{
    console.log(data.id);
    console.log(data.index);
    console.log(data.file);
    console.log(data.reader);
    console.log(data.files);
    // get message
    alert(msg);
});
.on('fileduplicateerror', function(event, file, fileId, caption, size, id, index)
{
    console.log(file);
    console.log(fileId);
    console.log(size);
    console.log(id);
    console.log(index);
    console.log(caption);
});

.on('fileimageresizeerror', function(event, data, msg)
{
    console.log(data.id);
    console.log(data.index);
    // get message
    alert(msg);
});
.on('fileuploaderror', function(event, data, msg)
{
    console.log('File uploaded', data.previewId, data.index, data.fileId, msg);
});
.on('fileuploaderror', function(event, data, msg)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File upload error');
    // get message
    alert(msg);
});

.on('filebatchuploaderror', function(event, data, msg)
{
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log('File batch upload error');
    // get message
    alert(msg);
});
.on('filedeleteerror', function(event, data, msg)
{
    console.log('File delete error');
    // get message
    alert(msg);
});
.on('filefoldererror', function(event, folders, msg)
{
    console.log('File folder dropped error');
    // get message
    alert(msg);
});
.on('filecustomerror', function(event, params, msg)
{
    console.log(params.id);
    console.log(params.index);
    console.log(params.data);
    // get message
    alert(msg);
});
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
