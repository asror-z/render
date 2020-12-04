$(document).ready(function () {


    $('#menu_show').on('click', function () {
        let icon_menu = $('#menu_show i');
        if (icon_menu.hasClass('fa-bars')) {
            icon_menu.removeClass('fa-bars');
            icon_menu.addClass('fa-times');

        } else {
            icon_menu.addClass('fa-bars');
            icon_menu.removeClass('fa-times');

        }
        $('#navbar_menu').toggle();
        console.log('sdasdas')
    })


});
