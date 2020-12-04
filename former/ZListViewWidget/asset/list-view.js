
let lS=window.localStorage;
let zcol=$('.zcol');
let zlist=$('.zlist');
let items=$('.item');
zlist.hide();

if(lS.getItem('grid')==='switch_to_list'){
    zcol.show();
    zlist.hide();
    items.addClass('col-3');
    items.removeClass('col-12');
    $('#switch_to_col').addClass('text-success');
    $('#switch_to_col').removeClass('btn-success');
    $('#switch_to_list').removeClass('text-success');
    $('#switch_to_list').addClass('btn-success');
    history.pushState("http://eyuf.zetsoft.uz/tester/asror/main.aspx?path=viewers/eyuf/market/main/list-view1.php", "", "#col");
}else{
    zcol.hide();
    zlist.show();
    items.addClass('col-12');
    items.removeClass('col-3');
    $('#switch_to_list').addClass('text-success')
    $('#switch_to_list').removeClass('btn-success')
    $('#switch_to_col').removeClass('text-success');
    $('#switch_to_col').addClass('btn-success');
    history.pushState("http://eyuf.zetsoft.uz/tester/asror/main.aspx?path=viewers/eyuf/market/main/list-view1.php", "", "#list");
}

$('#switch_to_list, #switch_to_col').on('click',function () {
    lS.setItem('grid',$(this).attr('id'))

    zcol=$('.zcol');
    zlist=$('.zlist');
    items=$('.item');
    $(this).removeClass('text-success')
    $(this).addClass('btn-success')
    if ($(this).attr('id')==='switch_to_list'){
        zcol.show();
        zlist.hide();
        items.addClass('col-3');
        items.removeClass('col-12');
        $('#switch_to_col').addClass('text-success');
        $('#switch_to_col').removeClass('btn-success');
        history.pushState("http://eyuf.zetsoft.uz/tester/asror/main.aspx?path=viewers/eyuf/market/main/list-view1.php", "", "#col");

    }
    if ($(this).attr('id')==='switch_to_col'){
        zcol.hide();
        zlist.show();
        items.addClass('col-12');
        items.removeClass('col-3');
        $('#switch_to_list').addClass('text-success')
        $('#switch_to_list').removeClass('btn-success')
        history.pushState("http://eyuf.zetsoft.uz/tester/asror/main.aspx?path=viewers/eyuf/market/main/list-view1.php", "", "#list");
    }



})
let pagination = $('.pagination');
let parent_pager = pagination.parent();
parent_pager.addClass('col-12 my-4');
//history.pushState("http://eyuf.zetsoft.uz/tester/asror/main.aspx?path=viewers/eyuf/market/main/list-view1.php", "", "#col");
