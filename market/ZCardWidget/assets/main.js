let items = $('.pre-tab-item');
$('#switch_to_list').on('click',function () {
    $(this).removeClass('btn-outline-success')
    $(this).addClass('btn-success')
    $('#switch_to_col').addClass('btn-outline-success')
    $('#switch_to_col').removeClass('btn-success')
    for (let i = 0; i < items.length; i++) {
        $(items[i]).removeClass('col-md-12');
        $(items[i]).addClass('col-md-3');
        $(items[i]).addClass('zclass');
    }
})
$('#switch_to_col').on('click',function () {
    $('#switch_to_list').addClass('btn-outline-success')
    $('#switch_to_list').removeClass('btn-success')
    $(this).removeClass('btn-outline-success')
    $(this).addClass('btn-success')
    for (let i = 0; i < items.length; i++) {
        $(items[i]).removeClass('zclass');
        $(items[i]).addClass('col-md-12');
        $(items[i]).removeClass('col-md-3');
    }
})
