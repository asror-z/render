var editor  = grapesjs.init({
    avoidInlineStyle: 1,
    height: '100%',
    container : '#gjs',
    fromElement: 1,
    allowScripts: true,
    showOffsets: 1,
    assetManager: {
        embedAsBase64: 1,
    },
    toolbar: [],
    commands: {
        defaults: [
            {
                id: 'grapes-clone',
                run() {

                    const domComponents = editor.DomComponents;
                    let model = editor.getSelected();
                    let parentEl = $(model.getEl());
                    let className = model.get('widgetName');
                    let basename = model.get('name');

                    if (!className) {
                        className = parentEl.find('[widget]').attr('widget');
                        basename = parentEl.find('[basename]').attr('basename');
                        basename = basename.replace(/Z|Widget/g, '')
                    }

                    var file = 'getWidget';
                    var htmlClass = 'zwidget';

                    if (className.includes('zetsoft/blocks')) {
                        file = 'getBlocks';
                        htmlClass = 'template-block';
                    }

                    var configs = parentEl.find('[config]').attr('config');
                    var classes = parentEl.attr('class');
                    var cssText = model.get('cssText');

                    var myStyle = parseCSSText(cssText)

                    $.ajax({
                        method: "GET",
                        url: '/core/kernel/grape/' + file + '.aspx?param=' + className + '&configs=' + configs,
                        success: function (response) {

                            var newComp = domComponents.addComponent({
                                name: basename,
                                removable: true,
                                draggable: true,
                                highlightable: true,
                                copyable: true,
                                toolbar: {toolbar},
                                content: response,
                                style: myStyle.style,
                                cssText: myStyle.cssText,
                            });

                            var newEl = $(newComp.getEl());
                            var blockId = newEl.find('[parent-id]').attr('parent-id')

                            newComp.set('blockId', blockId)

                            newEl.attr('class', htmlClass + ' parent-div ' + blockId);
                            newEl.attr('data-id', blockId);
                            newEl.attr('css', myStyle.cssText);
                            newEl.html(response);

                            parentEl.after(newEl);

                        },
                    });
                },
            },
            {
                id: 'tlb-params',
                run(model) {

                    let selected = editor.getSelected();
                    let selectedEl = $(selected.getEl());
                    let parentDiv = selectedEl;
                    let isAll = false;
                    let blockName = '';
                    let configs = {};
                    let file = 'getOptions';

                    console.log(selectedEl);

                    if (!selectedEl.hasClass('parent-div'))
                        parentDiv = selectedEl.closest('.parent-div');

                    if (parentDiv.hasClass('zwidget')) {
                        blockName = parentDiv.find('[widget]').attr('widget');
                        configs = parentDiv.find('[config]').attr('config');
                    } else {
                        blockName = parentDiv.find('[widget]').attr('widget');
                        configs = {};
                        file = 'selected';
                    }

                    var blockId = $(parentDiv).attr('blockId');
                    console.log(blockId);

                    var url = '/core/kernel/grape/' + file + '.aspx?param=' + blockName
                        + '&configs=' + configs
                        + '&isAll=' + isAll
                        + '&blockId=' + blockId;

                    $(document).find('#optionsPanel').remove();

                    jsPanel.create({
                        id: 'optionsPanel',
                        headerTitle: 'Параметры',
                        theme: 'white',
                        panelSize: {
                            width: '400px',
                            height: '500px'
                        },
                        position: "right-center",
                        animateIn: 'jsPanelFadeIn',
                        onwindowresize: true,
                        content: `<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" id="iframe" src='` + url + `' allowfullscreen width="400" height="auto"></iframe>           
</div>`
                    });

                    var iframe = document.getElementById('iframe');

                    $(iframe).on('load', function () {
                        var btn =  iframe.contentWindow.document.getElementById("sendOptions");

                        var form =  iframe.contentWindow.document.getElementById("activeFormGrapes");

                        $(btn).on('click', function () {
                            $.ajax({
                                method: "GET",
                                url: '/core/kernel/grape/getWidget.aspx?' + $(form).serialize()
                                    + '&param=' + blockName
                                    + '&blockId=' + blockId,

                                success: function (response) {
                                    parentDiv.html(response);
                                },

                            });
                        })


                    })



                },
            },
            {id: 'clear'},
            {id: 'go-to-page'},
            {
                id: 'grapes-clean',
                run() {
                    Swal.fire({
                        title: 'Вы уверены?',
                        text: "Вы действительно хотите очистить содержимое?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oчистить',
                        cancelButtonText: 'Отмена'
                    }).then((result) => {
                        if (result.value) {

                            cleanCanvas();

                            editor.runCommand('open-blocks');
                            $(editor.Canvas.getDocument().body).find('#wrapper').empty();

                            Swal.fire({
                                icon: 'success',
                                title: 'Очищено!',
                                timer: 1000,
                                showConfirmButton: false,
                            })
                            $('.gjs-traits-label').empty();
                            $('#search_grape').show();
                        }
                    });
                },
            },
            {
                id: 'save-file',
                run() {
                    saveContentPhp("ajax");
                }
            },
            {
                id: 'wav',
                run() {
                }
            },
        ],
    },
    selectorManager: { componentFirst: true },
    storageManager: {
        id: 'gjs-',
        type: 'local',
        autosave: false,
        autoload: false,
        stepsBeforeSave: 0,
    },
    styleManager: { clearProperties: 1 },
    canvas: {
        stylePrefix: 'cv-',
        styles: [
            '/render/former/ZGrapesJsWidget/demo/Grapes/css/iframe.css',
        ].concat({links}),
        scripts: [

        ].concat({scripts}),
        customBadgeLabel: '',
        autoscrollLimit: 50,
        notTextable: ['button', 'a', 'input[type=checkbox]', 'input[type=radio]']
    },
    plugins: [
        'grapesjs-lory-slider',
        'grapesjs-tabs',
        'grapesjs-custom-code',
        'grapesjs-touch',
        'grapesjs-parser-postcss',
        'grapesjs-tooltip',
        'grapesjs-tui-image-editor',
        'grapesjs-typed',
        'grapesjs-style-bg',
        'gjs-preset-webpage',
        'gjs-plugin-ckeditor'
    ],
    pluginsOpts: {
        'grapesjs-lory-slider': {
            sliderBlock: {
                category: 'Extra'
            }
        },
        'grapesjs-tabs': {
            tabsBlock: {
                category: 'Extra'
            }
        },
        'grapesjs-typed': {
            block: {
                category: 'Extra',
                content: {
                    type: 'typed',
                    'type-speed': 40,
                    strings: [
                        'Text row one',
                        'Text row two',
                        'Text row three',
                    ],
                }
            }
        },
        'gjs-preset-webpage': {
            modalImportTitle: 'Import Template',
            modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
            modalImportContent: function(editor) {
                return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
            },
            filestackOpts: null,
            aviaryOpts: false,
            blocksBasicOpts: { flexGrid: 1 },
        },
        'gjs-plugin-ckeditor': {

        }
    },
});


function parseCSSText(cssText) {

    if (!cssText)
        return {};

    var cssTxt = cssText.replace(/\/\*(.|\s)*?\*\//g, " ").replace(/\s+/g, " ");
    var style = {}, [,ruleName,rule] = cssTxt.match(/ ?(.*?) ?{([^}]*)}/)||[,,cssTxt];
    var cssToJs = s => s;
    //var cssToJs = s => s.replace(/\W+\w/g, match => match.slice(-1).toUpperCase());
    var properties = rule.split(";").map(o => o.split(":").map(x => x && x.trim()));
    for (var [property, value] of properties) style[cssToJs(property)] = value;

    return {cssText, ruleName, style};
}


function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}
