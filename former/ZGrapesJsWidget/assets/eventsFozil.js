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
                url: '/core/kernel/grape/' + assetsFile + '.aspx?param=' + className,
                success: function (response) {
                    getAssets(model, response);
                },
            });

            $.ajax({
                method: 'GET',
                url: '/core/kernel/grape/' + file + '.aspx?param=' + className,
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

function componentSelected(model) {

    let selected = editor.getSelected()
    let selectedEl = $(selected.getEl())
    let parentDiv = selectedEl

    let parentDivs = document.createElement('div')
    $(parentDivs).addClass('w-100 d-flex classes')

    let divs = document.createElement('a')
    $(divs).addClass('btn-floating btn-sm btn-primary ml-auto params')

    let deleteDiv = document.createElement('a')
    $(deleteDiv).addClass('btn-floating btn-sm btn-primary delete')

    let copyDiv = document.createElement('a')
    $(copyDiv).addClass('btn-floating btn-sm btn-primary copy')

    let addContents = document.createElement('a')
    $(addContents).addClass('btn-floating btn-sm btn-primary adding')
    
    let editStyle = document.createElement('a')
    $(editStyle).addClass('btn-floating btn-sm btn-primary styling')

    let tl = gsap.timeline({duration: 1, ease: "power3.out", stagger: 0.5})
    tl.fromTo(divs, { y:-100, opacity: 0}, { y:0, opacity: 1},"-=.5")
    tl.fromTo(deleteDiv, { y:-100, opacity: 0}, { y:0, opacity: 1},"-=.75")
    tl.fromTo(copyDiv, { y:-100, opacity: 0}, { y:0, opacity: 1}, "-=1")
    tl.fromTo(editStyle, { y:-100, opacity: 0}, { y:0, opacity: 1},"-=1.25")
    tl.fromTo(addContents, { y:-100, opacity: 0}, { y:0, opacity: 1},"-=1.5")

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

    $(divs).append(icons)
    $(deleteDiv).append(deleteIcon)
    $(copyDiv).append(copyIcon)
    $(addContents).append(addIcon)
    $(editStyle).append(styleIcon)

    $(parentDivs).append(divs)
    $(parentDivs).append(deleteDiv)
    $(parentDivs).append(copyDiv)
    $(parentDivs).append(editStyle)
    
    $('.gjs-traits-label').empty()
    
    let settingsBtn = panelManager.getButton('views', 'open-tm')
    settingsBtn.set('active', 1)
    
    $(selectedEl).append(parentDivs);
    
    let isAll = false
    let blockName = ''
    let configs = {}
    let file = 'getOptionsAbl'

    if (!selectedEl.hasClass('parent-div'))
        parentDiv = selectedEl.closest('.parent-div')

    if (selectedEl.hasClass('selfColumn')){
        $(parentDivs).append(addContents)
        $(divs).remove()
        $(deleteDiv).addClass('ml-auto')
    }

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
        if (blockName.includes('zetsoft')) {

            if (blockName.match(/zetsoft\/blocks\/.*\/ALL/g))
                isAll = true

            $.ajax({
                url: '/core/kernel/grape/' + file + '.aspx?param=' + blockName
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
                    url: '/core/kernel/grape/getWidget.aspx?' + $('#activeFormGrapes').serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,

                    success: function (response) {
                        parentDiv.html(response)
                    },

                })
            })

        }

    $(divs).on('click', function() {

        $(parentDivs).remove()
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
                    url: '/core/kernel/grape/getWidget.aspx?' + $(form).serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,

                    success: function (response) {
                        parentDiv.html(response);
                    },

                });
            })


        })
    })

    $(deleteDiv).on('click', function () {
        $(parentDivs).remove()
        editor.runCommand('tlb-delete')
    })

    $(copyDiv).on('click', function () {
        $(parentDivs).remove()
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
    })

    $(addContents).on('click', function () {
        $(parentDivs).remove()
        let blockContent = '';
        
        jsPanel.create({
            id: 'templates',
            headerTitle: 'Параметры',
            theme: 'white',
            panelSize: {
                width: '400px',
                height: '500px'
            },
            position: "center",
            animateIn: 'jsPanelFadeIn',
            onwindowresize: true,
            content: '',
        });

    })

    $(editStyle).on('click', function () {
        $(parentDivs).remove()
        let assetMen = editor.StyleManager
        let assetDiv = assetMen.render()

        jsPanel.create({
            id: 'stylePanel',
            theme: 'white',
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
            url: '/core/kernel/grape/' + file + '.aspx?param=' + className + '&configs=' + configs + '&blockId=' + blockId,
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
                'toolbar': {toolbar},
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
                'toolbar': {toolbar}
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

    blockManager.remove([
        'column1',
        'column2',
        'column3',
        'column3-7',
    ]);

    

    govnos()

}

function govnos() {


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
