var phone_width = 464;
var tablet_width = 751;
var desktop_width = 975;

var headerHeight = $("header").height();
var submenuHeight = 0;
var min = 14, max = 30;
var minzoom = 0, maxzoom = 5;
configSetCookie("clicked", false)


jQuery(document).ready(function () {
    "use strict";
    all()
});

function all() {
    if (Boolean(configGetCookie("clicked")) === false) return

    $(".mega-link").click(()=>configSetCookie("clicked", true));


    if (Boolean(configGetCookie("clicked")) === true) clickTrigger()
    configSetCookie("clicked", false)

}

jQuery(document).on('pjax:end', function () {
    "use strict";
    all()

});

jQuery(document).on('pjax:end', function () {
    "use strict";
    all()

});

function configSetCookie(key, value) {
    return Cookies.set(key, value, {path: '/'})
}

function configGetCookie(key) {
    return Cookies.get(key, {path: '/'})
}

function calculateContentHeight() {
    var height = $('.vd_navbar-left .navbar-tabs-menu').height() + $('.vd_navbar-left .navbar-menu').height() + $('.vd_navbar-left .navbar-spacing').height() + 8;
    var height_right = $('.vd_navbar-right .navbar-tabs-menu').height() + $('.vd_navbar-right .navbar-menu').height() + $('.vd_navbar-right .navbar-spacing').height() + 8;
    $('.vd_content-wrapper, .vd_content-wrapper > .vd_container').css('min-height', (height > height_right) ? height : height_right);
};

function checkMegaMenu() {
    if ($(window).width() <= tablet_width) {
        $('.vd_mega-menu .hover-target').removeClass('hover-target').addClass('hover-target-temp');
    } else {
        $('.vd_mega-menu .hover-target-temp').removeClass('hover-target-temp').addClass('hover-target');
    }
    if ($(window).width() <= desktop_width) {
        checkWindowTablet();
    } else {
        checkWindowDesktop();
    }

};

function checkWindowTablet() {
    if ($('body').hasClass('no-responsive')) {
        return (false);
    }
    if (!$('body').hasClass('nav-left-hide')) {
        $('body').addClass('nav-left-hide');
    }
    if (!$('body').hasClass('nav-right-hide')) {
        $('body').addClass('nav-right-hide');
    }
    $('body').removeClass('remove-navbar');
    $('body').removeClass('remove-header');
    $('body').removeClass('fullscreen');
    resizeAffixPanel();
}

function checkWindowDesktop() {
    if ($('body').hasClass('no-responsive')) {
        return (false);
    }
    if ($('body').hasClass('nav-left-hide')) {
        if (!$('body').hasClass('nav-left-start-hide')) {
            $('body').removeClass('nav-left-hide');
        } else {
            $('body').addClass('nav-left-hide');
        }
    }
    if ($('body').hasClass('nav-right-hide')) {
        if (!$('body').hasClass('nav-right-start-hide')) {
            $('body').removeClass('nav-right-hide');
        } else {
            $('body').addClass('nav-right-hide');
        }
    }
    $('body').removeClass('remove-navbar');
    $('body').removeClass('remove-header');
    $('body').removeClass('fullscreen');
    resizeAffixPanel();
}

function navbarResize(direction, size) {
    var opposite = (size == "small") ? "medium" : "small"
    // if nav size state
    if ($('body').hasClass('nav-' + direction + '-' + size)) {
        $('body').removeClass('nav-' + direction + '-' + size);
        if (size == 'small' && $('body').hasClass('enlarge-' + direction + '-to-medium')) {
            $('body').addClass('nav-' + direction + '-medium');
        }
        // if nav normal
    } else {
        $('body').removeClass('nav-' + direction + '-' + opposite);
        $('body').addClass('nav-' + direction + '-' + size);
    }
    $('.vd_navbar-' + direction + ' .navbar-tabs-menu .menu-container').removeAttr('style');
    $('.vd_navbar-' + direction + ' .navbar-tabs-menu [data-action^="expand-navbar-tabs-menu"] .badge').removeAttr('style');

}

function toggleNavbar(direction) {
    var opposite = (direction == "left") ? "right" : "left";
    $('body').removeClass('remove-navbar');
    $('body').removeClass('fullscreen');

    // if nav-direction is hiding
    if ($('body').hasClass('nav-' + direction + '-hide')) {
        $('body').removeClass('nav-' + direction + '-hide');
        //				navToggle(direction, "show");
        // if there is nav-opposite AND (nav-direction start with hiding OR smaller screen)
        if (!$('body').hasClass('no-nav-' + opposite) && !$('body').hasClass('nav-' + opposite + '-hide') && ($('body').hasClass('nav-' + direction + '-start-hide') || $(window).width() < desktop_width)) {
            //					navToggle(opposite, "hide");
            $('body').addClass('nav-' + opposite + '-hide');
        }
    } else // if nav-opposite is hiding
    if ($('body').hasClass('nav-' + opposite + '-hide') && $(window).width() >= desktop_width) {
        $('body').removeClass('nav-' + opposite + '-hide');
        $('body').addClass('nav-' + direction + '-hide');
    } else {
        $('body').addClass('nav-' + direction + '-hide');
    }
}

function checkStickyMenu() {
    if (!$("body").hasClass("nav-top-fixed") || $("body").hasClass("boxed-layout"))
        return (false);

    if ($(window).scrollTop() > headerHeight - submenuHeight && $(window).width() >= desktop_width) {
        // #Back-Top visible

        if ($("body").hasClass("sticky-menu-active"))
            return false;
        $("body").addClass("sticky-menu-active");
        if (!$("body").hasClass("fullscreen") && !$("body").hasClass("remove-header")) {
            $("body").css('padding-top', headerHeight);
        }
        $('header').css({
            top: -headerHeight,
            opacity: '.5',
            transition: 'none',
        }).stop(true, true).animate({
            top: 0,
            opacity: '1'
        }, 1000, function () {
            $('header').removeAttr('style');
            // Animation complete.
        });
    } else if ($(window).scrollTop() <= 0 || $(window).width() < desktop_width) {
        if ($("body").hasClass("sticky-menu-active")) {
            $("body").css('padding-top', 0);
            $("body").removeClass("sticky-menu-active");
            $("body").removeAttr('style');
        }
    }
}

function checkBackTop() {
    if ($(window).scrollTop() > headerHeight - submenuHeight) {
        $('#back-top').addClass('visible');
    } else if ($(window).scrollTop() <= 0) {
        $('#back-top').removeClass('visible');
    }
}

function resizeAffixPanel() {
    $('.sidebar-affix .panel').css('width', ($('.vd_content-section').innerWidth() - 114) / 3 + 'px');
    if ($(window).width() <= tablet_width) {
        $('.sidebar-affix .panel').removeAttr('style');
    }
}

function initialize() {
    // Nav-toggle Active
    if ($('body').hasClass('nav-medium')) {
        $('[data-action^="nav-medium"]').addClass('active');
    }
    if ($('body').hasClass('nav-small')) {
        $('[data-action^="nav-small"]').addClass('active');
    }

    // Active Menu
    var active_page = $('body').attr('data-active');

    $('.navbar-menu .vd_menu > ul > li#' + active_page).addClass('active');
    $('.navbar-menu .vd_menu > ul > li#' + active_page + ' > a').append('<span class="menu-active"><i class="icon-caret-left"></i></span>');

    calculateContentHeight();

    if ($(window).width() <= desktop_width) {
        checkWindowTablet();
    } else {
        checkWindowDesktop();
    }
    ;
    checkStickyMenu();
    checkBackTop();
    checkMegaMenu();
}

function activMenu() {
    // Active Menu
    var active_page = $('body').attr('data-active');

    $('.navbar-menu .vd_menu > ul > li#' + active_page).addClass('active');
    $('.navbar-menu .vd_menu > ul > li#' + active_page + ' > a').append('<span class="menu-active"><i class="icon-caret-left"></i></span>');
}

function displayResizing() {
    $(window).resize(function () {
        checkMegaMenu();

        navbarTabs();
    });

}

function navbarTabs() {
    $('.navbar-tabs-menu [data-action^="expand-navbar-tabs-menu"]').click(function () {
        $(this).next().animate({
            width: 'toggle',
            opacity: 'toggle'
        }, 300, "swing");
        $(this).find(".badge").toggle('fast');
    });
    contentResizing();
}

function contentResizing() {
    $('.vd_container').click(function () {
        if ($(window).width() <= desktop_width) {
            if (!$('body').hasClass('nav-right-hide')) {
                toggleNavbar('right');
                resizeAffixPanel();
            } else if (!$('body').hasClass('nav-left-hide')) {
                toggleNavbar('left');
                resizeAffixPanel();
            }

        }
    });
}

function navToggle() {
    if ($('body').hasClass('nav-medium')) {
        $('[data-action^="nav-medium"]').addClass('active');
    }
    if ($('body').hasClass('nav-small')) {
        $('[data-action^="nav-small"]').addClass('active');
    }
}

function clickTrigger() {
    $(function () {
        $('[data-action^="click-trigger"]').click(function (e) {
            e.preventDefault();
            if ($(this).parent().hasClass("hover-trigger") && $(this).siblings().hasClass("hover-target")) {
                return (0);
            }
            // check if not children of click-target then slideup
            if ($(this).parent().parent().parent().data("action") != "click-target" && $(this).parent().parent().parent().parent().parent().data("action") != "click-target") {
                $('[data-action^="click-target"]').slideUp('fast', function () { //calculateContentHeight();
                });
            } else {
                // check if children of click-target then slideup all the parent kids
                $(this).parent().siblings().children('[data-action^="click-trigger"]').removeClass('open');
                $(this).parent().siblings().children('[data-action^="click-target"]').slideUp('fast', function () {//calculateContentHeight();

                });
            }
            // if this is close
            if (!$(this).hasClass('open')) {


                if ($(this).parent().parent().parent().data("action") != "click-target") {
                    $('[data-action^="click-trigger"]').removeClass('open');
                }
                ;
                $(this).addClass('open');
                $(this).parent().children('[data-action^="click-target"]').slideDown('fast', function () {
                    if ($('.navbar-menu').outerHeight() < $('.navbar-menu .vd_menu').outerHeight() + $('.navbar-spacing ').outerHeight()) {
                        calculateContentHeight()
                    }
                    ;

                });


                // if this is open
            } else {
                $(this).removeClass('open');
                // check if children of click-target then slideup
                //if ($(this).parent().parent().parent().data("action") == "click-target"){
                $(this).parent().children('[data-action^="click-target"]').slideUp('fast', function () {

                });
                //}
            }
            $('body').removeClass('expand-all');

        });

        // Click outside click-target
        $(document).click(function (event) {
            if (($(event.target).closest('[data-action^="click-trigger"]').get(0) == null) && ($(event.target).closest('[data-action^="click-target"]').get(0) == null) && ($(event.target).closest('[data-action^="expand-all"]').get(0) == null)) {
                $('[data-action^="click-target"]').hide();
                $('[data-action^="click-trigger"]').removeClass('open');
                $('body').removeClass('expand-all');
                calculateContentHeight();
            }
        });
    });

    //CHECKED
}

