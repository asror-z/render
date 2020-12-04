
<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/grapesjs"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-forms@1.0.5/dist/grapesjs-plugin-forms.min.js"></script>


<div id="gjs">
    <div class="form-group highlight-addon row field-loginform-name required">
        <label class="col-form-label has-star col-md-4" for="loginform-name">Имя пользователя</label>
        <div class="col-md-8">
            <input id="loginform-name" class="form-control" name="LoginForm[name]" placeholder="Введите Имя пользователя">

            <div class="help-block invalid-feedback"></div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container : '#gjs',
        plugins: ['gjs-plugin-actions'],
        pluginsOpts: {
            textCleanCanvas:'Are you sure you want to clean the canvas?',
            cleanBtnTitle:'Clean the canvas',
            importBtnTitle:'Import',
            undoBtnTitle:'Undo',
            redoBtnTitle:'Redo',
            modalImportLabel:'``',
            modalImportContent:'``',
            modalImportButton:'Import',
            modalImportTitle:'Import',
    }
    });
</script>
