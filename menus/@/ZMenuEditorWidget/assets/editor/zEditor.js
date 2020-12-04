/**
 *
 * Author:  Asror Zakirov
 * Created: 3/5/2020 3:34 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


jQuery(document).ready(function () {

    var titles = {titles};
    var icons = {icons};
    var actions = {action};
    var json = '{json}';
    //console.log(json);
    var texts = '{texts}';
    var textName = '';
    var actionVal = '';

    var editIcon = $('#myEditor_icon');
    var formEdit = $('#formEdit');


    // WEB ACTION
    var actionTitle = $('#text_vall');
    var webAction = $('#vall');
    var webActValue = $('#action_value');
    //var webActName = $('#actionName');
    var webActIcon = $('#ico');
    //var valueReceiver = $('#text2');
    //var idSender = $('#text1');
    //TEXT
    var textValue = $('#text_value');
    var iconValue = $('#icon_value');
    var setExamMenu = $('#setDat');
    var btnOutput = $('#btnOutput');
    var out = $('#out');
    var targetValue = $('#targetValue');
    //PARAMETRS
    var parametrs = $('#param');
    //var parametrValue = $('#paramVal');

    var selectOption = $('#SelectOption');
    var roleValue = $('#RoleValue');
    var menuForm = $('#menuform');

    //BTN
    var updateBtn = $('#btnUpdate');
    var menuDeleteBtn = $('#delMen');
    var myEditor = $('#myEditor');
    var btnAdd = $('#btnAdd');








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
        actionTitle.val(webAction.val()).select2().trigger('change');
        webActIcon.removeClass();
        webActIcon.addClass(icons[webAction.val()]);
        iconValue.val(icons[webAction.val()]);
    }).on('select2:clear', function () {
        $('#text').val('');
        $('#title').val('');
    });



    actionTitle.on('select2:select', function () {
        webAction.val(actionTitle.val()).select2().trigger('change');
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

        $("#$menutable-json").val(editor.getString());



        textValue.val(titles[actionTitle.val()]);
        console.log(textValue.val());

        $('#action').val(webAction.val());

        //console.log($('#action').val());

        editor.update();

        webAction.val(null).trigger("change");
        selectOption.val(null).trigger("change");
        roleValue.val(null).trigger("change");
        targetValue.val(null).trigger("change");
        actionTitle.val(null).trigger("change");
        btnOutput.click();
    });

    menuDeleteBtn.click(function () {
        myEditor.empty();
    });

    btnAdd.click(function () {







        textValue.val(titles[actionTitle.val()]);
        $('#action').val(webAction.val());



        editor.add();


        webAction.val(null).trigger("change");
        selectOption.val(null).trigger("change");
        roleValue.val(null).trigger("change");
        targetValue.val(null).trigger("change");
        actionTitle.val(null).trigger("change");
        btnOutput.click();

        $("#$menutable-json").val(editor.getString());

    });




    menuForm.submit(function () {
        $("#$menutable-json").val(editor.getString());
        return true;
    });

    var action = webAction.select2({
        allowClear: true,
        placeholder: "Веб действия",

    }).trigger('change');
    var text = actionTitle.select2({
        allowClear: true,
        placeholder: "Текст",

    }).trigger('change');

    var Role = roleValue.select2({
        allowclear: true,
        multiple: true,
        placeholder: 'Доступ запрешён для ..'
    }).trigger('change');
    var target = targetValue.select2({
        allowClear: true,
        placeholder: "Веб цель",

    }).trigger('change');
    selectOption.select2({
        allowClear: true,
        multipe: true,
        placeholder: "Выбрать Css класс",
    }).trigger('change');


    /* ====================================== */

    /** PAGE ELEMENTS **/
    $('[data-toggle="tooltip"]').tooltip();
    $.getJSON("https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function (data) {
        $('#btnStars').html(data.stargazers_count);
        $('#btnForks').html(data.forks_count);
    });
    $('#bta').on('click', function () {
        copyToClipboard(textValue.val());
    });
    $('#ac_btn').on('click', function () {
        copyToClipboard(webActValue.val());
    });

});
