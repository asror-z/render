/**
 *
 * Author:  Asror Zakirov
 * Created: 6/19/2020 9:56 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


let lS=window.localStorage;
let first_el=$('.{first_el}');
let second_el=$('.{second_el}');
let items=$('.appendTo .{first_el},.appendTo .{second_el}');

second_el.hide();

function switchToFirst() {
    first_el=$('.{first_el}');
    second_el=$('.{second_el}');
    items=$('.appendTo .{first_el},.appendTo .{second_el},.{second_el},.{first_el}');
    first_el.show();
    second_el.hide();
    $('#{second_el}').addClass('{btn_no_active}')
    $('#{second_el}').removeClass('{btn_active}')
    $('#{first_el}').removeClass('{btn_no_active}');
    $('#{first_el}').addClass('{btn_active}');
}

function switchToSecond(){
    first_el=$('.{first_el}');
    second_el=$('.{second_el}');
    items=$('.appendTo .{first_el},.appendTo .{second_el},.{second_el},.{first_el}');
    second_el.show();
    first_el.hide();
    $('#{first_el}').addClass('{btn_no_active}');
    $('#{first_el}').removeClass('{btn_active}');
    $('#{second_el}').removeClass('{btn_no_active}');
    $('#{second_el}').addClass('{btn_active}');
}
$(document).on('ready pjax:success',function () {
    lS=window.localStorage;
    second_el.hide();
    if(lS.getItem('{local_storage_key}')==='{second_el}'){
        switchToSecond();
    }
    else{
        switchToFirst();
    }
    $('#{second_el}, #{second_el}').on('click',function () {
        lS.setItem('{local_storage_key}',$(this).attr('id'))
        $(this).removeClass('{btn_no_active}')
        $(this).addClass('{btn_active}')
        if ($(this).attr('id')==='{second_el}'){
            switchToSecond()
        }
        if ($(this).attr('id')==='{first_el}'){
            switchToFirst();
        }
    })
})

$('#{second_el}, #{first_el}').on('click',function () {
    lS.setItem('{local_storage_key}',$(this).attr('id'))
    first_el=$('.{first_el}');
    second_el=$('.{second_el}');
    items=$('.appendTo .{first_el},.appendTo .{second_el}');
    $(this).removeClass('{btn_no_active}')
    $(this).addClass('{btn_active}')
    if ($(this).attr('id')==='{second_el}'){
        switchToSecond()
    }
    if ($(this).attr('id')==='{first_el}'){
        switchToFirst();
    }
})

function checkTabs() {
    lS=window.localStorage;
    items=$('.appendTo .{first_el},.appendTo .{second_el}');
    first_el=$('.{first_el}');
    second_el=$('.{second_el}');
    if(lS.getItem('{local_storage_key}')==='{second_el}'){
        switchToSecond();
    }
    else{
        switchToFirst()
    }
}

checkTabs();
