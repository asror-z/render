<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
<script src="https://unpkg.com/grapesjs"></script>
<script src="https://cdn.jsdelivr.net/npm/grapesjs-tabs@0.2.1/dist/grapesjs-tabs.min.js"></script>

<div id="gjs">
    <div class="form-group highlight-addon row field-loginform-name required">
        <label class="col-form-label has-star col-md-4" for="loginform-name">Имя пользователя</label>
        <div class="col-md-8">
            <input id="loginform-name" class="form-control" name="LoginForm[name]"
                   placeholder="Введите Имя пользователя">

            <div class="help-block invalid-feedback"></div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var editor = grapesjs.init({
        container: '#gjs',

        plugins: ['grapesjs-tabs'],
        pluginsOpts: {
            'grapesjs-tabs': {
                tabblock: {},
                tabsProps: {},
                tabProps: {},
                tabContentProps: {},
                tabContainerProps: {},
                attrTabs: 'data-tabs',
                attrTab: 'data-tab',
                attrTabContent: 'data-tab-content',
                attrTabContainer: 'data-tab-container',
                clastab: 'tab',
                clastabActive: 'tab-active',
                clastabContent: 'tab-content',
                clastabContainer: 'tab-container',
                selectorTab: 'href',
                templateTabContent: '<div>New Tab Content</div>'
            }
        }
    });
</script>
