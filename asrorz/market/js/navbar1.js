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
    $('#signIn').on('click', function () {
        $(".signin-cart").fadeToggle("fast");
        console.log('jello')
    });

    // $('#langPick').on('click', function () {
    //     $(".lang-cart").fadeToggle( "fast");
    // });

    // $(document).mouseup(function (e) {
    //     var container = [];
    //      // container.push($('.signin-cart'));
    //     // console.log(container)
    //     $.each(container, function (key, value) {
    //         if (!$(value).is(e.target) && $(value).has(e.target).length === 0)
    //         {
    //             $(value).fadeOut('fast');
    //
    //         }
    //     });
    // });
});
