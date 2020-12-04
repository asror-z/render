/**
 * jQuery Menu Editor
 * @author David Ticona Saravia https://github.com/davicotico
 * @version 1.0.0
 * */
var titles = {titles};
var icons = {icons};
var actions = {action};


/**
 * @version 1.0.0
 * @author David Ticona Saravia
 * @param {string} idSelector Attr ID
 * @param {object} options Options editor
 * */
function MenuEditor(idSelector, options) {
    var $main = $("#" + idSelector);
    var settings = {
        labelEdit: '<i class="fas fa-edit clickable"></i>',
        labelDuplicat: '<i class="fas fa-copy clickable"></i>',
        labelRemove: '<i class="fas fa-trash-alt clickable"></i>',
        textConfirmDelete: 'This item will be deleted. Are you sure?',
        iconPicker: { cols: 4, rows: 4, footer: false, iconset: "fontawesome5" },
        listOptions: {
            hintCss: { border: '1px dashed #13981D' },
            opener: {
                as: 'html',
                close: '<i class="fas fa-minus"></i>',
                open: '<i class="fas fa-plus"></i>',
                openerCss: { 'margin-right': '10px', 'float': 'none' },
                openerClass: 'btn btn-success btn-sm',
            },
            placeholderCss: { 'background-color': 'gray' },
            ignoreClass: 'clickable',
            listsClass: "pl-0",
            listsCss: { "padding-top": "10px" },
            complete: function(cEl) {
                MenuEditor.updateButtons($main);
                return true;
            }
        }
    };
    $.extend(true, settings, options);
    var itemEditing = null;
    var sortableReady = true;
    var $form = null;
    var $updateButton = null;
    var iconPickerOpt = settings.iconPicker;
    var options = settings.listOptions;
    //iconpicker plugin
    var iconPicker = $('#' + idSelector + '_icon').iconpicker(iconPickerOpt);
    //sortable list plugin
    $main.sortableLists(settings.listOptions);
    /* EVENTS */
    iconPicker.on('change', function(e) {
        $form.find("[name=icon]").val(e.icon);
    });
    $(document).on('click', '.btnRemove', function(e) {
        e.preventDefault();
        if (confirm(settings.textConfirmDelete)) {
            var list = $(this).closest('ul');
            $(this).closest('li').remove();
            var isMainContainer = false;
            if (typeof list.attr('id') !== 'undefined') {
                isMainContainer = (list.attr('id').toString() === idSelector);
            }
            if ((!list.children().length) && (!isMainContainer)) {
                list.prev('div').children('.sortableListsOpener').first().remove();
                list.remove();
            }
            MenuEditor.updateButtons($main);
        }
    });

    $(document).on('click', '.btnEdit', function(e) {
        e.preventDefault();
        itemEditing = $(this).closest('li');
        editItem(itemEditing);
        var iconEdit = itemEditing.find('i')[0].className;
        var iconVal = $('#myEditor_icon').children()[0];

        /*   iconVal.replace(/^\s+|\s+$/gm,'');
           console.error(iconVal);*/
        $(iconVal).removeClass();
        $(iconVal).addClass(iconEdit);
        
        var action = $('#action').val();
        var class_val = $('#class').val();
        var target = $('#val__tar').val();
        var array = [];
        array.push(class_val);
        var class_arr = $('#class').val().split(",");


        var role_val = $('#role').val();
        var array2 = [];
        array.push(role_val);
        var role_arr = $('#role').val().split(",");

        var actionVal = $('#vall').val();
        $('#icon_value').val(icons[actionVal]);

        $('#ico').removeClass();
        $('#ico').addClass(icons[actionVal]);



        $('#text_vall').val(action).trigger("change");
        var text = $('#text_vall').val();
        var nameText =  $('#text1').val(titles[text]);
        var text_val =  nameText.val();
        $('#text_value').val(text_val);
        $('#vall').val(action).trigger("change");
        var actionVal = $('#vall').val();
        var actionName = $('#actionName').val(actions[actionVal]);
        ac_val = actionName.val();
        $('#action_value').val(ac_val);

        $('#clas-val').val(class_arr).trigger("change");
        $('#val__vis').val(role_arr).trigger("change");
        $('#val__tar').val(target).trigger("change");
    });

    $(document).on('click', '.btnDuplicat', function() {

        var list = $(this).closest('ul');
        var $li = $(this).closest('li');
        //$li.find('button').click();
        $li.clone().appendTo(list);

    });

    $main.on('click', '.btnUp', function(e) {
        e.preventDefault();
        var $li = $(this).closest('li');
        $li.prev('li').before($li);
        MenuEditor.updateButtons($main);
    });
    $main.on('click', '.btnDown', function(e) {
        e.preventDefault();
        var $li = $(this).closest('li');
        $li.next('li').after($li);
        MenuEditor.updateButtons($main);
    });
    $main.on('click', '.btnOut', function(e) {
        e.preventDefault();
        var list = $(this).closest('ul');
        var $li = $(this).closest('li');
        var $liParent = $li.closest('ul').closest('li');
        $liParent.after($li);
        if (list.children().length <= 0) {
            list.prev('div').children('.sortableListsOpener').first().remove();
            list.remove();
        }
        MenuEditor.updateButtons($main);
    });
    $main.on('click', '.btnIn', function (e) {
        e.preventDefault();
        var $li = $(this).closest('li');
        var $prev = $li.prev('li');
        if ($prev.length > 0) {
            var $ul = $prev.children('ul');
            if ($ul.length > 0)
                $ul.append($li);
            else {
                var $ul = $('<ul>').addClass('pl-0').css('padding-top', '10px');
                $prev.append($ul);
                $ul.append($li);
                $prev.addClass('sortableListsOpen');
                TOpener($prev);
            }
        }
        MenuEditor.updateButtons($main);
    });

    /* PRIVATE METHODS */
    function editItem($item) {
        var data = $item.data();
        $.each(data, function(p, v) {
            $form.find("[name=" + p + "]").val(v);
        });

        $form.find(".item-menu").first().focus();
        if (data.hasOwnProperty('icon')) {
            iconPicker.iconpicker('setIcon', data.icon);
        } else {
            //iconPicker.iconpicker('setIcon', 'empty');
        }
        $updateButton.removeAttr('disabled');
    }

    function resetForm() {
        $form[0].reset();
        var actionVal = $('#vall').val();
        $('#icon_value').val(icons[actionVal]);

        $('#ico').addClass(icons[actionVal]);
        $('#ico').removeClass();
        $updateButton.attr('disabled', true);
        itemEditing = null;

    }

    function stringToArray(str) {
        try {
            var obj = JSON.parse(str);
        } catch (err) {
            console.log('The string is not a json valid.');
            return null;
        }
        return obj;
    }

    function TButton(attr) {
        return $("<a>").addClass(attr.classCss).addClass('clickable').attr("href", "#").html(attr.text);
    }

    function TButtonGroup() {
        var $divbtn = $('<div>').addClass('btn-group float-right');
        var $btnEdit = TButton({ classCss: 'btn btn-primary btn-sm btnEdit', text: settings.labelEdit });
        var $btnDuplicat = TButton({ classCss: 'btn btn-primary btn-sm btnDuplicat', text: settings.labelDuplicat });

        var $btnRemv = TButton({ classCss: 'btn btn-danger btn-sm btnRemove', text: settings.labelRemove });
        var $btnUp = TButton({ classCss: 'btn btn-success btn-sm btnUp btnMove', text: '<i class="fas fa-angle-up clickable"></i>' });
        var $btnDown = TButton({ classCss: 'btn btn-success btn-sm btnDown btnMove', text: '<i class="fas fa-angle-down clickable"></i>' });
        var $btnOut = TButton({ classCss: 'btn btn-success btn-sm btnOut btnMove', text: '<i class="fas fa-level-down-alt clickable"></i>' });
        var $btnIn = TButton({ classCss: 'btn btn-success btn-sm btnIn btnMove', text: '<i class="fas fa-level-up-alt clickable"></i>' });
        $divbtn.append($btnUp).append($btnDown).append($btnIn).append($btnOut).append($btnDuplicat).append($btnEdit).append($btnRemv);
        return $divbtn;
    }

    /**
     * @param {array} arrayItem Object Array
     * @param {int} depth Depth sub-menu
     * @return {object} jQuery Object
     **/
    function createMenu(arrayItem, depth) {
        var level = (typeof (depth) === 'undefined') ? 0 : depth;
        var $elem = (level === 0) ? $main : $('<ul>').addClass('pl-0').css('padding-top', '10px');
        $.each(arrayItem, function (k, v) {
            var isParent = (typeof (v.children) !== "undefined") && ($.isArray(v.children));
            var itemObject = {text: "", icon: "", target: "_self", action: "",};
            var temp = $.extend({}, v);
            if (isParent){
                delete temp['children'];
            }

            $.extend(itemObject, temp);
            var $li = $('<li>').addClass('list-group-item pr-0');
            $li.data(itemObject);
            var $div = $('<div>').css('overflow', 'auto');
            var $i = $('<i>').addClass(v.icon);
            
            var $span = $('<span>').addClass('txt').append(v.text).css('margin-right', '5px');
            var $divbtn =  TButtonGroup();

            $div.append($i).append("&nbsp;").append($span).append($divbtn);
            $li.append($div);
            if (isParent) {
                $li.append(createMenu(v.children, level + 1));
            }
            $elem.append($li);
        });
        return $elem;


    }

    function TOpener(li) {
        var opener = $('<span>').addClass('sortableListsOpener ' + options.opener.openerClass).css(options.opener.openerCss)
            .on('mousedown touchstart', function(e) {
                var li = $(this).closest('li');
                if (li.hasClass('sortableListsClosed')) {
                    li.iconOpen(options);
                } else {
                    li.iconClose(options);
                }
                return false; // Prevent default
            });
        opener.prependTo(li.children('div').first());
        if (!li.hasClass('sortableListsOpen')) {
            li.iconClose(options);
        } else {
            li.iconOpen(options);
        }
    }

    function setOpeners() {
        $main.find('li').each(function() {
            var $li = $(this);
            if ($li.children('ul').length) {
                TOpener($li);
            }
        });
    }
    /* PUBLIC METHODS */
    this.setForm = function(form) {
        $form = form;
    };

    this.getForm = function() {
        return $form;
    };

    this.setUpdateButton = function($btn) {
        $updateButton = $btn;
        $updateButton.attr('disabled', true);
        itemEditing = null;
    };

    this.getUpdateButton = function() {
        return $updateButton;
    };

    this.getCurrentItem = function() {
        return itemEditing;
    };

    this.update = function() {
        var $cEl = this.getCurrentItem();
        if ($cEl === null) {
            return;
        }

        var action_val = $('#vall').val();
        $('#action').val(action_val);

        var target_val = $('#val__tar').val();
        $('#target').val(target_val);

        var text = $('#text_vall').val();
        var nameText = $('#text1').val(titles[text]);
        var text_val = nameText.val();

        $('#text_value').val(text_val);
        
        var clas_val = $('#clas-val').val();
        $('#class').val(clas_val);


        var role_val = $('#val__vis').val();
        $('#role').val(role_val);

        var actionVal = $('#vall').val();
        $('#icon_value').val(icons[actionVal]);
        $('#ico').removeClass();
        $('#ico').addClass(icons[actionVal]);
        $('#ico').removeClass();

        $form.find('.item-menu').each(function(){
            $cEl.data($(this).attr('name'), $(this).val());
        });
        $($cEl.find('i')[0]).addClass($('#icon_value').val());
        $cEl.find('span.txt').first().text($('#text_value').val());
        resetForm();
    };

    this.add = function(){
        var data = {};
        $form.find('.item-menu').each(function(){
            data[$(this).attr('name')] = $(this).val();
        });
        var btnGroup = TButtonGroup();
        var textItem = $('<span>').addClass('txt').text(text);
        var iconItem = $('<i>').addClass($('#icon_value').val());
        var div = $('<div>').css({"overflow": "auto"}).append(iconItem).append("&nbsp;").append(textItem).append(btnGroup);
        var $li = $("<li>").data(data);
        $li.addClass('list-group-item pr-0').append(div);
        $main.append($li);
        MenuEditor.updateButtons($main);
        resetForm();

    };
    /**
     * Data Output
     * @return String JSON menu scheme
     */
    this.getString = function() {
        var obj = $main.sortableListsToJson();
        return JSON.stringify(obj);

    };
    /**
     * Data Input
     * @param {Array} Object array. The nested menu scheme
     */
    this.setData = function(strJson) {
        var arrayItem = (Array.isArray(strJson)) ? strJson : stringToArray(strJson);
        if (arrayItem !== null) {
            $main.empty();
            var menu = createMenu(arrayItem);
            if (!sortableReady) {
                menu.sortableLists(settings.listOptions);
                sortableReady = true;
            } else {
                setOpeners();
            }
            MenuEditor.updateButtons($main);

        }
    };
};
/* STATIC METHOD */
/**
 * Update the buttons on the list. Only the buttons 'Up', 'Down', 'In', 'Out'
 * @param {jQuery} $mainList The unorder list
 **/
MenuEditor.updateButtons = function($mainList) {
    $mainList.find('.btnMove').show();
    $mainList.updateButtons();
};
