if ($.AsrorZ === undefined) {
    $.AsrorZ = {};
}


$(document).on('click', '[data-toggle=popover-x]', function () {
    $("[data-toggle='popover-x']").popoverButton();

});


$(document).keyup(function (event) {
    if (event.which === 27) {
        $('.popover').popoverX('hide');
    }
});


function post(path, params, method = 'post') {

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    const form = document.createElement('form');
    form.method = method;
    form.action = path;

    for (const key in params) {
        if (params.hasOwnProperty(key)) {
            const hiddenField = document.createElement('input');
            hiddenField.type = 'hidden';
            hiddenField.name = key;
            hiddenField.value = params[key];

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}


function saveNewPositions(url) {
    var positions = [];
    $('.updated').each(function () {
        positions.push([$(this).attr('data-id'), $(this).attr('data-position')]);
        $(this).removeClass('updated');
    });

    $.ajax({
        url: url,
        method: 'post',
        dataType: 'text',
        data: {
            positions: positions
        }, success: function (response) {
            console.log(response);
        }
    });

}
//Vardumper vd() yopiq turishi uchun
$(document).ready(function () {
    $('samp.sf-dump-expanded').addClass('sf-dump-compact');
    $('samp.sf-dump-expanded').removeClass('sf-dump-expanded');
    $('a.sf-dump-ref').on('click', function () {
        $('samp.sf-dump-expanded').removeClass('sf-dump-compact');
    });
    //ZDownloadWidget iconcasi va nomi to'g'ri turishi uchun
    $('.kv-editable-value').addClass('w-100');
});








