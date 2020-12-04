<link href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.15.8/css/grapes.min.css" rel="stylesheet"/>
<link href="/publish/grapes/grapesjs-preset-webpage/grapesjs-preset-webpage.min.css" rel="stylesheet"/>
<script src="/publish/grapes/grapesjs-preset-webpage/grapes.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-preset-webpage@0.1.11/dist/grapesjs-preset-webpage.min.js"></script>

<div id="gjs"></div>
<div id="gjs" style="height:0px; overflow:hidden">
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

            plugins: ['gjs-preset-webpage'],
        pluginsOpts: {
        'gjs-preset-webpage': {
            blocks:['link-block', 'quote', 'text-basic'],
            modalImportTitle:'Import',
            modalImportButton:'Import',
            modalImportLabel:'',
            importViewerOptions:{},
            textCleanCanvas:'Are you sure to clean the canvas?',
            showStylesOnChange:true,
            textGeneral:'General',
            textLayout:'Layout',
            textTypography:'Typography',
            textDecorations:'Decorations',
            textExtra:'Extra',
            customStyleManager:[],
            blocksBasicOpts:{},
            navbarOpts:{},
            countdownOpts:{},
            formsOpts:{},
            exportOpts:{},
            aviaryOpts:false,
            filestackOpts:false
        }
    }
    });
</script>
