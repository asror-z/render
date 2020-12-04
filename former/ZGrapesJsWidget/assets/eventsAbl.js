const canvasComponents = [];

function componentAdd(model) {

    var visibility = panelManager.getButton('options', 'sw-visibility');
    visibility.set('active', 1);

    var parentDiv = $(model.getEl());
    var className = model.get('widgetName');

    if (className) {

        var file = 'getWidget';
        var assetsFile = 'getAssets';
        var htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            assetsFile = 'getBlockAssets';
            htmlClass = 'template-block';
        }

        if (className.includes('zetsoft')) {

            $.ajax({
                method: 'GET',
                url: '/core/grape/' + assetsFile + '.aspx?param=' + className,
                success: function (response) {
                    getAssets(model, response);
                },
            });

            $.ajax({
                method: 'GET',
                url: '/core/grape/' + file + '.aspx?param=' + className,
                success: function (response) {

                    function pushComponent() {

                        parentDiv.html(response);
                        let blockId = parentDiv.find('[parent-id]').attr('parent-id');
                        parentDiv.addClass(htmlClass + ' parent-div ' + blockId);
                        parentDiv.attr('data-id', blockId);
                        model.set('blockId', blockId)

                    }

                    if (canvasComponents.includes(className)) {
                        pushComponent()
                    } else {
                        setTimeout(function () {
                        pushComponent()
                        }, 1000)
                    }

                    canvasComponents.push(className)

                },
            });

        }

    }

}

function componentDrag(model) {


}
function componentHovered(model) {

    let htmls = model.view.$el

    let posY = htmls.height() / 2 + 'px'
    let posX = htmls.width() / 2 + 'px'

    let icon = document.createElement('div')
    $(icon).addClass('d-none hoverSettings')
    $(icon).css({
        'position': 'absolute',
        'left': posX,
        'top': posY,
        'transform': 'translate(-50%, -50%)',
        'width': 'transparent',
        'height': 'transparent',
    })

    let divs = document.createElement('a')
    $(divs).addClass('btn-floating btn-sm btn-primary mx-1 params')

    let deleteDiv = document.createElement('a')
    $(deleteDiv).addClass('btn-floating btn-sm btn-primary mx-1 delete')

    let copyDiv = document.createElement('a')
    $(copyDiv).addClass('btn-floating btn-sm btn-primary mx-1 copy')

    let addContents = document.createElement('a')
    $(addContents).addClass('btn-floating btn-sm btn-primary mx-1 adding')

    let editStyle = document.createElement('a')
    $(editStyle).addClass('btn-floating btn-sm btn-primary mx-1 styling')

    let addWidget = document.createElement('a')
    $(addWidget).addClass('btn-floating btn-sm btn-primary mx-1 styling')

    let addIcon = document.createElement('i')
    $(addIcon).addClass('fal fa-plus')

    let icons = document.createElement('i')
    $(icons).addClass('fal fa-cog')

    let deleteIcon = document.createElement('i')
    $(deleteIcon).addClass('fal fa-trash-alt')

    let copyIcon = document.createElement('i')
    $(copyIcon).addClass('fal fa-copy')

    let styleIcon = document.createElement('i')
    $(styleIcon).addClass('fal fa-paint-brush')

    let widgetIcon = document.createElement('i')
    $(widgetIcon).addClass('fad fa-layer-plus')

    $(divs).append(icons)
    $(deleteDiv).append(deleteIcon)
    $(copyDiv).append(copyIcon)
    $(addContents).append(addIcon)
    $(editStyle).append(styleIcon)
    $(addWidget).append(widgetIcon)

    $(icon).append(divs)
    $(icon).append(deleteDiv)
    $(icon).append(copyDiv)
    $(icon).append(editStyle)

    if (htmls.hasClass('selfColumn')){
        $(icon).append(addContents)
        $(icon).append(addWidget)
        $(divs).remove()
        $(copyDiv).remove()
    }


    let wrap = $(htmls).attr('id')
    if (wrap === 'wrapper'){

    }else{
        $(htmls).css({'position': 'relative !important'})
        $(htmls).append(icon)
        $(icon).removeClass('d-none')
    }

    /* new Toolbar events start */

    $(divs).on('click', function() {

        $(document).find('#optionsPanel').remove()

        let isAll = false;
        let blockName = '';
        let configs = {};
        let file = 'getOptions';

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

        var url = '/core/grape/' + file + '.aspx?param=' + blockName
            + '&configs=' + configs
            + '&isAll=' + isAll
            + '&blockId=' + blockId;

        $(document).find('#optionsPanel').remove();

        jsPanel.create({
            id: 'optionsPanel',
            headerTitle: 'Параметры',
            headerControls: 'closeonly sm',
            theme: 'white',
            borderRadius: '.5rem',
            panelSize: {
                width: '400px',
                height: '500px'
            },
            position: "center",
            animateIn: 'jsPanelFadeIn',
            onwindowresize: true,
            boxShadow: 1,
            content: `<div class="embed-responsive w-100 h-100 embed-responsive-16by9">
  <iframe class="embed-responsive-item" id="iframe" src='` + url + `' width="400px" height="600px"></iframe>           
</div>`
        });

        var iframe = document.getElementById('iframe');

        $(iframe).on('load', function () {
            var btn =  iframe.contentWindow.document.getElementById("sendOptions");

            var form =  iframe.contentWindow.document.getElementById("activeFormGrapes");

            $(btn).on('click', function () {
                $.ajax({
                    method: "GET",
                    url: '/core/grape/getWidget.aspx?' + $(form).serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,

                    success: function (response) {
                        htmls.html(response);
                    },

                });
            })


        })
    })

    $(deleteDiv).on('click', function () {
        editor.runCommand('tlb-delete')
    })

    $(copyDiv).on('click', function () {
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

        var file;
        var htmlClass;

        if (className.includes('zetsoft/widgets')) {
            file = 'getWidget';
            htmlClass = 'zwidget';
        } else {
            file = 'getBlocks';
            htmlClass = 'template-block';
        }

        var configs = parentEl.find('[config]').attr('config');
        var classes = parentEl.attr('class');
        var cssText = model.get('cssText');

        var myStyle = parseCSSText(cssText)

        $.ajax({
            method: "GET",
            url: '/core/grape/' + file + '.aspx?param=' + className + '&configs=' + configs,
            success: function (response) {

                var newComp = domComponents.addComponent({
                    name: basename,
                    removable: true,
                    draggable: true,
                    highlightable: true,
                    copyable: true,
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
    })

    $(editStyle).on('click', function () {

        $(document).find('#stylePanel').remove()
        let assetMen = editor.StyleManager
        let assetDiv = assetMen.render()

        jsPanel.create({
            id: 'stylePanel',
            theme: 'white',
            headerTitle: 'Styles',
            headerControls: 'closeonly sm',
            borderRadius: '.5rem',
            panelSize: {
                width: '300px',
                height: '400px',
            },
            position: 'center',
            content: assetDiv,
            animateIn: 'jsPanelFadeIn',
            onwindowresize: true,

        });

    })

    $(addContents).on('click', function () {
        let blockContent = '';
        console.log(blocks)

        Swal.fire({
            title: 'blocks',
            html: `<div class="embed-responsive w-100 h-100 embed-responsive-16by9">
  <iframe class="embed-responsive-item" id="contents" src='/core/grapes/templates.aspx' width="400px" height="600px"></iframe>           
</div>`,

            showCloseButton: true,
            showConfirmButton: false,
            width: '900px',
            height: '800px'
        })

        var iframe = document.getElementById('contents');

        $(iframe).on('load', function () {
            var btn =  iframe.contentWindow.document.getElementsByClassName('blockGrapesBtn');

            $(btn).on('click', function () {
                let dataId = $(this).attr('data-id');

                $.ajax({
                    type: 'GET',
                    url: '/core/grape/getBlockAssets.aspx',
                    data: {
                        param: dataId
                    },
                    success: function (response) {
                        getAssets(model, response);
                    }
                })

                $.ajax({
                    type: 'GET',
                    url: '/core/grape/getBlocks.aspx',
                    data: {
                        param: dataId
                    },
                    success: function (response) {
                        
                        const domComponents = editor.DomComponents;

                        var newComp = domComponents.addComponent({
                            name: dataId,
                            removable: true,
                            draggable: true,
                            highlightable: true,
                            copyable: true,
                            content: response,
                        });
                        
                        var newEl = $(newComp.getEl());
                        newEl.addClass('template-block parent-div')
                        newEl.html(response);

                        $(htmls).append(newEl)
                        Swal.close()
                    }
                })
            })


        })

    })

    $(addWidget).on('click', function () {
        let blockContent = '';

        Swal.fire({
            title: 'widgets',
            html: `<div class="embed-responsive w-100 h-100 embed-responsive-16by9">
  <iframe class="embed-responsive-item" id="contents" src='/core/grapes/widgets.aspx' width="400px" height="600px"></iframe>           
</div>`,

            showCloseButton: true,
            showConfirmButton: false,
            width: '900px',
            height: '800px'
        })

        var iframe = document.getElementById('contents');

        $(iframe).on('load', function () {
            var btn =  iframe.contentWindow.document.getElementsByClassName('blockGrapesBtn');

            $(btn).on('click', function () {
                let dataId = $(this).attr('data-id');

                $.ajax({
                    type: 'GET',
                    url: '/core/grape/getAssets.aspx',
                    data: {
                        param: dataId
                    },
                    success: function (response) {
                        getAssets(model, response);
                    }
                })

                $.ajax({
                    type: 'GET',
                    url: '/core/grape/getWidget.aspx',
                    data: {
                        param: dataId
                    },
                    success: function (response) {
                        $(htmls).append(response)
                        Swal.close()
                    }
                })
            })


        })

    })

    /* new Toolbar events end */


}
function componentUnhovered(model) {
    let main = model.view
    let el  = main.el
    $(el).css({'opacity': '1', 'background': ''})
    console.log('unhover')
    $(el).find('.hoverSettings').addClass('d-none')
}

function componentSelected(model) {

    /* main Parents start */

    let selected = editor.getSelected()
    let selectedEl = $(selected.getEl())
    let parentDiv = selectedEl
    let settingsBtn = panelManager.getButton('views', 'open-tm');
    settingsBtn.set('active', 1);
    /* main Parents end */
    
    $('.gjs-traits-label').empty()
    

    
    let isAll = false
    let blockName = ''
    let configs = {}
    let file = 'getOptionsAbl'

    if (!selectedEl.hasClass('parent-div'))
        parentDiv = selectedEl.closest('.parent-div')
    


    let selectedIds = selectedEl.attr('id')

    if (selectedIds === 'wrapper')
        $(parentDivs).remove()

    if (parentDiv.hasClass('zwidget')) {
        blockName = parentDiv.find('[widget]').attr('widget')
        configs = parentDiv.find('[config]').attr('config')
    } else {
        blockName = parentDiv.find('[widget]').attr('widget')
        configs = {}
        file = 'selected'
    }

    
    var blockId = model.get('blockId')

    if (blockName)
            if (blockName.match(/zetsoft\/blocks\/.*\/ALL/g))
                isAll = true

            $.ajax({
                url: '/core/grape/' + file + '.aspx?param=' + blockName
                    + '&configs=' + configs
                    + '&isAll=' + isAll
                    + '&blockId=' + blockId,

                type: 'GET',
                async: false,
                success: function (response) {
                    $('.gjs-traits-label').html(response)
                    editor.getSelected().removeTrait(['id','title',])
                },
            })


            $('#sendOptions').on('click', function () {

                $.ajax({
                    method: "GET",
                    url: '/core/grape/getWidget.aspx?' + $('#activeFormGrapes').serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,

                    success: function (response) {
                        parentDiv.html(response)
                    },

                })
            })



}

function componentDeselected(model) {

   let main = model.view
   let el  = main.el

   let button = $(el).find('.classes')
   button.remove()

}

function componentDragEnd(model) {

    clearBodyCanvas();

    let target = model.target;
    let className = target.get('widgetName');
    let parentEl = $(target.getEl());

    let configs = parentEl.find('[config]').attr('config');
    var blockId = target.get('blockId');
    let content = target.get('content');
    let cssText = target.get('cssText');

    if (!className)
        className = parentEl.find('[widget]').attr('widget');

    if (className) {

        let file = 'getWidget';
        let htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            htmlClass = 'template-block';
        }

        parentEl.empty();

        $.ajax({
            method: "GET",
            url: '/core/grape/' + file + '.aspx?param=' + className + '&configs=' + configs + '&blockId=' + blockId,
            success: function (response) {
                parentEl.html(response);
            },
        });

        if (!parentEl.hasClass(htmlClass))
            parentEl.addClass(htmlClass + ' parent-div ' + blockId);

        parentEl.attr('css', cssText);
        parentEl.attr('data-id', blockId);

    }


}

function getStyleObj() {

    var body = editor.Canvas.getBody();
    var myCss = $(body).find('#grape_style');
    var cssRules = myCss.get(0).sheet.cssRules;

    var stylesObj = {};
    for (var i = 0; i <= cssRules.length; i++) {

        var rules = $(cssRules).get(i)

        if (rules) {
            var selector = rules.selectorText.replace('.', '')
            var stylesText = rules.style.cssText

            stylesObj[selector] = stylesText
        }

    }

    return stylesObj

}

function loadEditor() {
    $('.gjs-editor ').addClass('d-none')
    $('.loaderMain').removeClass('d-none')
    setTimeout(function () {
        $('.gjs-editor ').removeClass('d-none')
        $('.loaderMain').addClass('d-none')
    }, 6000)

    grape_search()
    clearBodyCanvas()
    
    const wrapper = editor.DomComponents.getWrapper()
    const componentsParent = wrapper.find('.zwidget')

    
    componentsParent.forEach(function (zwidget) {

        let widget = zwidget.getEl()
        let parent = $(widget).closest('.template-block')

        zwidget.attributes.content = $(widget).html()

        if (parent.hasClass('template-block'))
            $(widget).removeClass('parent-div')

    });
    
    const components = wrapper.find('[data-gjs-type]');
    components.forEach(function (component) {

        const componentEl = component.getEl()
        component.set({
            'editable': false,
            'copyable': false,
            'droppable': false,
            'draggable': false,
            'hoverable': false,
            'selectable': false,
            'stylable': false,
            'highlightable': false,
            'badgable': true,
            'layerable': false,
            'ajaxable': true,
        })

        if ($(componentEl).hasClass('parent-div')) {

            var widgetName = 'Column';

            if (!$(componentEl).find('.parent-div').length > 0)
                widgetName = $(componentEl).find('[basename]').attr('basename');

            if ($(componentEl).find('[blockname]').length > 0)
                widgetName = $(componentEl).find('[blockname]').attr('blockname');

            if (widgetName)
                widgetName = widgetName.replace(/Z|Widget/g, '')

            var stylesObj = getStyleObj();
            for (var key in stylesObj) {

                var parseCss = parseCSSText(stylesObj[key])

                if ($(componentEl).hasClass(key)) {
                    component.set('cssText', parseCss.cssText)
                    component.set('style', parseCss.style)
                }

            }

            var blockId = $(componentEl).attr('data-id')

            component.set({
                'name': widgetName,
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': true,
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
                'blockId': blockId,
            });

        }

        if ($(componentEl).hasClass('selfColumn')) {

            var element = component.getEl();
            var widgetName = 'Column';

            component.set({
                'type': 'default',
                'name': widgetName,
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': true,
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
            });

            component.set({
                'droppable': true,
            });
        }

        if (component.get('type') === 'text') {
            component.set('editable', true)
        }

    });

    let wrapper1 = $(editor.Canvas.getDocument().body).find('#wrapper')
    wrapper1.addClass('parent-div');

    const swv = panelManager.getButton('options', 'sw-visibility');

    $('#search_grape').attr('type', 'text');

    $('#search_grape').on('keyup', function () {
        $(this).value;
    });
    

    $('.color-pick').on('click', function () {

            const pickr = Pickr.create({
                el: '.color-pick',
                theme: 'nano',
                useAsButton: true,

                swatches: [
                    'rgba(244, 67, 54, 1)',
                    'rgba(233, 30, 99, 0.95)',
                    'rgba(156, 39, 176, 0.9)',
                    'rgba(103, 58, 183, 0.85)',
                    'rgba(63, 81, 181, 0.8)',
                    'rgba(33, 150, 243, 0.75)',
                    'rgba(3, 169, 244, 0.7)',
                    'rgba(0, 188, 212, 0.7)',
                    'rgba(0, 150, 136, 0.75)',
                    'rgba(76, 175, 80, 0.8)',
                    'rgba(139, 195, 74, 0.85)',
                    'rgba(205, 220, 57, 0.9)',
                    'rgba(255, 235, 59, 0.95)',
                    'rgba(255, 193, 7, 1)'
                ],

                components: {
                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,

                    // Input / output Options
                    interaction: {
                        hex: true,
                        rgba: true,
                        input: true,
                        save: true,
                        cancel: true
                    }
                }

            });
        function lightOrDark(color) {

            // Variables for red, green, blue values
            var r, g, b, hsp;

            // Check the format of the color, HEX or RGB?
            if (color.match(/^rgb/)) {

                // If RGB --> store the red, green, blue values in separate variables
                color = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);

                r = color[1];
                g = color[2];
                b = color[3];
            } else {

                // If hex --> Convert it to RGB: http://gist.github.com/983661
                color = +("0x" + color.slice(1).replace(
                    color.length < 5 && /./g, '$&$&'));

                r = color >> 16;
                g = color >> 8 & 255;
                b = color & 255;
            }

            // HSP (Highly Sensitive Poo) equation from http://alienryderflex.com/hsp.html
            hsp = Math.sqrt(
                0.299 * (r * r) +
                0.587 * (g * g) +
                0.114 * (b * b)
            );

            // Using the HSP value, determine whether the color is light or dark
            if (hsp > 127.5) {
                return 'black';
            } else {
                return 'white';
            }
        }
            pickr.on('change', (...args) => {

                let color = args[0].toHEXA()
                let rgbColor = `#${color[0]}${color[1]}${color[2]}`;



                $('.gjs-two-color').css({'background-color': rgbColor, 'color': lightOrDark(rgbColor)});
                $('.gjs-pn-views-container').css({'background-color': rgbColor, 'color': lightOrDark(rgbColor)});
                $('.gjs-pn-views').css({'background-color': rgbColor, 'color': lightOrDark(rgbColor)});
                $('.WhiteClass').css({'color': lightOrDark(rgbColor)});
                $('.gjs-one-bg').css({'background-color': rgbColor});
                $('.gjs-title').css({'background-color': rgbColor + "!important", 'color': lightOrDark(rgbColor)+ "!important"});


            }).on('save', (...args) => {
                // console.log(pickr.getRoot().app)
                pickr.hide();
                let color = args[0].toHEXA()
                let saveBgColor = `#${color[0]}${color[1]}${color[2]}`;
                localStorage.setItem('bgcolor', saveBgColor);
                localStorage.setItem('iconcolor', lightOrDark(saveBgColor))
            }).on('cancel', color => {
                pickr.hide();
            })

    })

    govnos()

}

function govnos() {

    let storageColors = localStorage.getItem('bgcolor');
    let stColor = localStorage.getItem('iconcolor');
    $('.gjs-two-color').css({'background-color': storageColors, 'color': stColor});
    $('.gjs-pn-views-container').css({'background-color': storageColors, 'color': stColor});
    $('.gjs-pn-views').css({'background-color': storageColors, 'color': stColor});
    $('.WhiteClass').css({'color': stColor});
    $('.gjs-one-bg').css({'background-color': storageColors});
    $('.gjs-title').css({'background-color': storageColors + "!important", 'color': stColor+ "!important"});


    let blocks = blockManager.getAll().models;

    let container = $('.gjs-pn-views-container');
    let container_div2 = $('.gjs-pn-options .gjs-pn-buttons')

    /*let template_btn1 = document.createElement('span');
    let widget_btn = document.createElement('span');*/

    const openBlock = editor.Panels.getButton('views', 'open-blocks');
    let content_tmpl = document.createElement('div');

    /*  container_div2.addClass('extras');

      widget_btn.setAttribute('data-original-title', 'Widgets');
      template_btn1.setAttribute('data-original-title', 'Templates');


      content_tmpl.setAttribute('class', 'content-switch');

      template_btn1.setAttribute('class', 'btn-widget d-inline-block gjs-pn-btn template-switch tabItem grape-tooltip');
      widget_btn.setAttribute('class', 'btn-template d-inline-block gjs-pn-btn widget-switch tabItem grape-tooltip');
  */

    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.gjs-pn-options .gjs-pn-buttons .fa-arrows-alt').remove();
        $('#search_grape').after(content_tmpl);
    } else {
        container_div2.append(content_tmpl);
    }

    let btn_widget = $('.widget-switch');

    btn_widget.addClass('gjs-pn-active');

    let block_categories = $('.gjs-block-categories');
    let block_category = $('.gjs-block-category');

    let widgets = [];
    let templates = [];
    block_categories.append()

    for (let i = 0; i < block_category.length; i++) {
        let counter_wdg = 0;
        let counter_tmp = 0;
        let item = block_category[i];
        let item_children = item.children[1].children;
        for (let j = 0; j < item_children.length; j++) {
            let item_after = item_children[j];
            if (item_after.classList.contains('widgets')) {
                counter_wdg++;
            }
            if (item_after.classList.contains('templates')) {
                counter_tmp++;
            }
        }
        if (counter_wdg > 0) {
            widgets.push(item);
        }
        if (counter_tmp > 0) {
            templates.push(item);
            item.style.display = 'none';
        }
        if (counter_tmp === 0 && counter_wdg === 0) {
            widgets.push(item);
        }
    }

    let widgetBtn = document.querySelector('#widget-switch');
    console.log(widgetBtn)
    
    $('.tabItem').on('click', function () {

        $('#search_grape').show();
        openBlock.set('active', 1);

        $('.tabItem').removeClass('gjs-pn-active')
        $(this).addClass('gjs-pn-active')

        if ($(this).hasClass('widget-switch')) {
            widgets.map(widget =>
                widget.style.display = 'block'
            )
            templates.map(template =>
                template.style.display = 'none'
            )
        } else {
            widgets.map(widget =>
                widget.style.display = 'none'
            )
            templates.map(template =>
                template.style.display = 'block'
            )
        }
       
    })
    
    let zoomsize = 100;

    function zoomOutt() {
        zoomsize--;
        zoomsize--;
        editor.Canvas.setZoom(zoomsize);

    }

    function zoomInn() {
        zoomsize++;
        zoomsize++;
        editor.Canvas.setZoom(zoomsize);
    }

    $(document).keydown(function (e) {
        if (e.keyCode === 189) {
            //editor.Canvas.setZoom(20);
            zoomOutt();
        } else if (e.keyCode === 187) {
            //editor.Canvas.setZoom(120);
            zoomInn();
        }
    });

    $('.grape-tooltip').tooltipster({
        theme: 'tooltipster-light',
        animation: 'fade',
        delay: 100,
        anchor: 'right',

    });

    $('.instruction').on('click', function () {
       $('.widget-switch').attr('data-intro', 'najim etu knopkani najmi')
        var intro = introJs();
        intro.setOptions({
            steps: [
                {
                    intro: "Welcome to Grapes"
                },
                {
                    element: document.querySelector('.template-switch'),
                    intro: "Widgets",
                    
                },
                {
                    element: document.querySelector('.widget-switch'),
                    intro: "keting najim"
                },
                {
                    element: document.querySelector('.gotoPage'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.saveFile'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-trash'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-redo'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-undo'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-arrows-alt'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-eye'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-square'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-mobile'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-tablet'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-desktop'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-th-large'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-bars'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-cog'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.fa-paint-brush'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.form-control'),
                    intro: "kasdadasdasd"
                },
                {
                    element: document.querySelector('.gjs-block-categories'),
                    intro: "Tugadi najim"
                },
                
            ],
            showProgress:true,
            overlayOpacity:0,
        });

        intro.start();
    })

}

function componentStyleUpdate(model) {

    var parentEl = $(model.getEl())
    var styles = model.getStyle()

    var stringify = JSON.stringify(styles)
    stringify = stringify.replace(/",/g, ';')
    stringify = stringify.replace(/{|}|"/g, '')

    console.log(stringify)

    parentEl.attr('css', stringify)
    model.set('cssText', stringify)

}

function componentRemove(model) {
    const openBl = panelManager.getButton('views', 'open-blocks');
    openBl.set('active', 1);
    clearBodyCanvas();
}

let arrayAssets = [];

function getAssets(model, response) {

    model.attributes.content = response;

    const responseDom = $.parseHTML(response, document, true);
    const canvasHead = editor.Canvas.getDocument().head;

    $(responseDom).each(function (i, el) {

        const src = $(el).attr("src");
        const href = $(el).attr("href");
        if (src && !arrayAssets.includes(src)) {
            const script = document.createElement("script");
            script.src = src;
            script.type = "text/javascript";
            canvasHead.append(script);
            arrayAssets.push(src);
        }

        if (href && !arrayAssets.includes(href)) {
            const link = document.createElement("link");
            link.href = href;
            link.rel = "stylesheet";
            canvasHead.append(link);
            arrayAssets.push(href);
        }
    });

}


function cleanCanvas() {

    const comps = editor.DomComponents;
    comps.clear();

    clearBodyCanvas();

    var blocksButton = panelManager.getButton('views', 'open-blocks');
    blocksButton.set('active', 1);

}


function clearBodyCanvas() {

    let bodyHtml = $(body).html();
    let children = $(body).children();

    children.each(function (key, value) {

        let className = $(value).attr('class');
        if (className) {
            if (!className.includes('gjs-') && $(value).attr('id') !== 'wrapper')
                value.remove()
        }

    });

}


function grape_search() {

    let bm = editor.BlockManager;
    let pn = editor.Panels;
    let bs = editor.BlockManager.getAll();
    let titles = bs.models;
    let parentBlocks = bm.getAll();
    let searchBlocks = document.createElement('input');
    let searchBlocksTitle = document.getElementsByClassName("gjs-block-category");
    searchBlocks.placeholder = 'Поиск...';
    searchBlocks.id = 'search_grape';
    $(searchBlocks).addClass('form-control my-2 mx-1 grape-tooltip');

    let trash = document.createElement("i");
    $(trash).addClass('fal fa-times s_trash ');

    let flexContent = document.createElement("div");
    $(flexContent).addClass('d-flex w-100 flex_content search-grape');

    let main = $('.gjs-pn-views-container');
    main.prepend(flexContent);
    flexContent.prepend(searchBlocks);
    flexContent.append(trash);
    $(trash).on('click', function () {
        $('#search_grape').val('');
        $('#search_grape').trigger("keyup");
        $('.widget-switch').click();
    });

    searchBlocks.onkeyup = function () {
        let search_value = searchBlocks.value;
        let search_item = document.getElementsByClassName('gjs-block');
        var openBl = panelManager.getButton('views', 'open-blocks');
        openBl.set('active', 1);
        for (let c = 0; c < searchBlocksTitle.length; c++) {
            let count = 0;
            let sbt = searchBlocksTitle[c];
            let sbt_title = searchBlocksTitle[c].children[0];
            let sbt_items = searchBlocksTitle[c].children[1];
            for (let b = 0; b < sbt_items.children.length; b++) {
                let el = $(sbt_items.children[b]).find('.gjs-block-label').text();
                let normal = sbt_items.children[b].getAttribute('title');
                let lower = el.toLowerCase();
                let up = el.toUpperCase();
                if (lower.includes(search_value) || el.includes(search_value) || up.includes(search_value)) {
                    $(sbt_items.children[b]).show();
                    $(sbt[b]).addClass("d-none");
                    count++;
                } else if (search_value.length === 0) {
                    $(sbt_items.children[b]).show();

                    count++;
                } else if (search_value.length > 0)
                    $(sbt_items.children[b]).hide();

            }
            if (count > 0) {
                sbt_title.classList.remove("d-none");
                sbt.style.display = "block";
            } else {
                sbt_title.classList.add("d-none");
                sbt.style.display = "none";
            }
            bm.getCategories().each(category => {
                category.set('open', true)
            })
        }

        if (search_value.length === 0) {
            bm.getCategories().each(category => {
                category.set('open', false)
            })
        }
    };

    $('.gjs-pn-views-container').prepend(searchBlocks);

}


