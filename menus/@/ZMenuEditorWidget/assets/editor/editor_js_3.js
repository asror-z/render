jQuery(document).ready(function () {

    var titles = {titles};
    var icons = {icons};
    var actions = {action};
    var json = {json};

    var menutable = $("#{menutable}-json");
    var editIcon = $('#myEditor_icon');
    var formEdit = $('#formEdit');

    // WEB ACTION
    var actionTitle = $('#text_vall');
    var webAction = $('#vall');
    var webActValue = $('#action_value');
    var webActIcon = $('#ico');

    //TEXT
    var textValue = $('#text_value');
    var iconValue = $('#icon_value');
    var setExamMenu = $('#setDat');
    var btnOutput = $('#btnOutput');
    var out = $('#out');
    var targetValue = $('#targetValue');

    //PARAMETRS
    var parametrs = $('#param');
    var selectOption = $('#SelectOption');
    var roleValue = $('#RoleValue');
    var menuForm = $('#menuform');

    //BTN
    var updateBtn = $('#btnUpdate');
    var menuDeleteBtn = $('#delMen');
    var myEditor = $('#myEditor');
    var btnAdd = $('#btnAdd');

    var active = $('#active');








    var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
    var sortableListOptions = {
        placeholderCss: {'background-color': "#cccccc"}
    };

    var arrayjson = [];
    var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
    editor.setForm(formEdit);
    editor.setUpdateButton(updateBtn);
    editor.setData(json);

    webAction.on('select2:select', function () {
        actionTitle.val(webAction.val()).trigger('change');
        webActIcon.removeClass();
        webActIcon.addClass(icons[webAction.val()]);
        iconValue.val(icons[webAction.val()]);
    });


    actionTitle.on('select2:select', function () {
        webAction.val(actionTitle.val()).trigger('change');
        webActIcon.removeClass();
        webActIcon.addClass(icons[actionTitle.val()]);
        iconValue.val(icons[actionTitle.val()]);
    });
    setExamMenu.on('click', function () {
        editor.setData(arrayjson);
    });

    btnOutput.on('click', function () {
        var str = editor.getString();
        out.text(str);
    });

    updateBtn.click(function () {
        menutable.val(editor.getString());

        textValue.val(titles[actionTitle.val()]);
        $('#action').val(webAction.val());
        editor.update();
        webAction.val(null).trigger("change");
        selectOption.val(null).trigger("change");
        roleValue.val(null).trigger("change");
        targetValue.val(null).trigger("change");
        actionTitle.val(null).trigger("change");
        active.val(null).trigger('change').removeAttr('checked');
        btnOutput.click();
    });

    menuDeleteBtn.click(function () {
        myEditor.empty();
    });

    btnAdd.click(function () {
        textValue.val(titles[actionTitle.val()]);
        //console.log(textValue.val());
        $('#action').val(webAction.val());
        editor.add();
        webAction.val(null).trigger("change");
        selectOption.val(null).trigger("change");
        roleValue.val(null).trigger("change");
        targetValue.val(null).trigger("change");
        actionTitle.val(null).trigger("change");
        active.val(null).trigger('change').removeAttr('checked');

        btnOutput.click();
        menutable.val(editor.getString());

    });
    menuForm.submit(function () {
        menutable.val(editor.getString());
        return true;
    });




    /* ====================================== */

    /** PAGE ELEMENTS **/
    $('[data-toggle="tooltip"]').tooltip();
    $.getJSON("https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function (data) {
        $('#btnStars').html(data.stargazers_count);
        $('#btnForks').html(data.forks_count);
    });
    $('#bta').on('click', function () {
        copyToClipboard(textValue.val());          ``
    });
    $('#ac_btn').on('click', function () {
        copyToClipboard(actions[$('#action').val()]);
    });

});
