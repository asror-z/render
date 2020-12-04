<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/grapesjs"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-modal@0.1.37/dist/grapesjs-plugin-modal.min.js"></script>

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
        container: '#gjs',

        plugins: ['gjs-modal'],
        pluginsOpts: {
            category: 'Advanced',
            modalStyle: 'The bootstrap css to modal only. (https://getbootstrap.com/docs/3.3/customize/)',
            modalHtml: 'A basic bootstrap modal',
            modalJquery: 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',
            modalBootstrap: 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',

        }
    });
</script>
