/**
 *
 * Author:  Asror Zakirov
 * Created: 12/9/2019 3:42 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */



jQuery(document).ready(function ($) {
    "use strict";
    $('.exch_table table tr.hideother').nextAll('tr').slideUp();

    $(document).on('click', '.hide_no_need', function() {
        $('.exch_table table tr.hideother').nextAll('tr').toggleClass('showhide');
        $(this).toggleClass('arrow_up');

        if ($('.exch_table table tr.hideother').nextAll('tr').hasClass('showhide')) {
            $('.hide_no_need p').text($('.hide_no_need p').attr('data-hidetext'));
        } else {
            $('.hide_no_need p').text($('.hide_no_need p').attr('data-showtext'));
        }
    });

    // converter currency
    $('.rateval').val($('.rate2').val());
    $('.rate2').change(function (event) {
        $('.rateval').val($(this).val());
        $('.ratecalc').trigger('keyup');
    });

    $('.ratecalc').keyup(function (event) {
        var summ = Number($(this).val()) * Number($('.rate2').val());
        $('.rateval').val(summ.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    });

    $(window).load(function () {
        var $selectedItems = $("p, a, strong, span, address, h1, h2, h3, h4, h5, h6, em, i, .credit_head .select2");
        $selectedItems.each(function () {
            var $this = $(this);
            $this.data("orig-size", $this.css("font-size"));
        });

        function changeFontSize(direction) {
            $selectedItems.each(function () {
                var $this = $(this);
                $this.css('font-size', parseInt($this.css('font-size')) + direction);
            });
        }
        $('#nav-icon2').click(function () {
            $('.mobile_menu').addClass('to_right');
        });
        $('.mobile_menu button').click(function () {
            $('.mobile_menu').removeClass('to_right');
        });
        $('.bot_menu ul li').each(function () {
            if ($(this).find('ul').length) {
                $(this).find('a').append('<span></span>');
            }
            $('.bot_menu ul li ul').find('span').remove();
        });
        $('.des').click(function (e) {
            e.preventDefault();
            changeFontSize(-1);
        });
        $('.inc').click(function (e) {
            e.preventDefault();
            changeFontSize(1);
        });
        $(".def").click(function () {
            $selectedItems.each(function () {
                var $this = $(this);
                $this.css("font-size", $this.data("orig-size"));
            });
        })
    })

    $('header .specials ul li input.itemRadio').each(function (i) {
        var radioItem = $(this);
        radioItem.click(function () {
            var myId = radioItem.prop("id");
            if (myId == 'variantDefault' || myId == 'variantDefault_Mob') {
                $('body').removeClass('variantBlackWhite');
                $('body').addClass('variantDefault');
                $('.grayscale').removeClass('grayscale-off');
            } else if (myId == 'variantBlackWhite' || myId == 'variantBlackWhite_Mob') {
                $('body').removeClass('variantDefault');
                $('body').addClass('variantBlackWhite');
            }
        });
    });

    $('#credit_select').select2({
        minimumResultsForSearch: -1,
        dropdownParent: $('.select_container')
    });
    $('.coverter select').select2({
        minimumResultsForSearch: -1
    });
    $('.bodysearch span').click(function () {
        $('.main_popup').addClass('heights');
        $('.main_popup').find('input[type="text"]').focus();
        $('body').css('overflow', 'hidden');
    })
    $('.pop_closer').click(function () {
        $('.main_popup').removeClass('heights');
        $('body').css('overflow', 'visible');
    })

    $(".spec_popup").removeClass("active");

    $(document).mouseup(function (e) {
        var langItem = $('.spec_popup');
        if (langItem.has(e.target).length === 0) {
            $(".spec_popup").removeClass('active');
        }
    });

    $(".switcher").on('click', function () {
        $(this).next().addClass("active");
    });


    $('.exch_table table').basictable({
        breakpoint: 767,
        forceResponsive: true
    });

    $('#owl1').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        nav: true,
        autoHeight: true,
        navText: ["", ""],
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        autoplay:true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            992: {
                nav: false
            },
            1100: {
                touchDrag: false,
                mouseDrag: false
            }
        }
    });

    if (document.body.clientWidth < '1200') {
        $('.scrollheight').remove();
    }
    if (document.body.clientWidth < '1024') {
        $('.show_only_desktop').remove();
    }



    var headerMobile = $('.mobile_menu ul li span');

    function mobileNavAccordion() {
        $(this).parent().toggleClass('active');
    }

    headerMobile.click(mobileNavAccordion);

    // Credit Page
    $('.tab_fade .quest_section ul li h6').click(function () {
        $(this).toggleClass('open');
        $(this).parent().find('p').slideToggle();
    });
    if (document.body.clientWidth > '993') {
        $('.tab_fade').hide();
        $('.tab_fade:first').show();
        $('.tabs_head ul li:first').addClass('active');
        $('.tabs_head ul li span.mobile_accord').click(function (event) {
            $('.tabs_head ul li').removeClass('active');
            $(this).parent().addClass('active');
            $('.tab_fade').hide();

            var selectTab = $('#' + $(this).parent().data("attr"));

            $(selectTab).fadeIn();
        });
    }

//	Tarifs
    if ($('.open_drop').length) {
        $('.open_drop').click(function() {
            if ($(this).parent().hasClass('non-accordion')) {
                $(this).parent().removeClass('active');
            }
            else {
                $(this).parent().siblings().removeClass('active');
                $(this).parent().toggleClass('active').stop();
                $('html, body').stop().animate({
                    scrollTop: $(this).offset().top - 50
                }, 400);
            }
            if($(window).width() < 992) {
                $('html, body').stop().animate({
                    scrollTop: $(this).offset().top - 100
                }, 400);
            }
        });
        $('.open_drop a').click(function(e) {
            e.stopPropagation();
        })
    }
// ABOUT BANK ACCORDION MOBILE
    if ($('.sidebar .mobile-accordion').length) {
        $('.sidebar .mobile-accordion').click(function() {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().toggleClass('active').stop();
            $('html, body').stop().animate({
                scrollTop: $(this).offset().top - 100
            }, 400);
        });
    }

    if (document.body.clientWidth < '993') {
        $('.tabs_head ul li.for_accord').each(function () {
            var li2 = $(this);
            var hrefid2 = li2.data('attr');
            $('.tab_fade').each(function (index, element) {
                var tablockid2 = $(this).attr('id');
                if (hrefid2 == tablockid2) {
                    li2.append($('#' + tablockid2)[0].outerHTML);
                }
            });
        });
        $('.tab_fade .quest_section ul li h6').click(function () {
            $(this).toggleClass('open');
            $(this).parent().find('p').slideToggle();
        });
        $('.tab_fade').slideUp();
        $('.tab_fade:first').slideDown();
        $('.tabs_head ul li:first').addClass('active');
        $('.tabs_head ul li span.mobile_accord').click(function () {
            $('.tabs_head ul li').removeClass('active')
            $(this).parent().addClass('active');
            var mobileTab = $('#' + $(this).parent().data("attr"));
            $('.tab_fade').slideUp();
            $(mobileTab).slideDown();
        });
    }
    // KAMOLIDDIN SCRIPTS
    var owl2 = $("#owl2");
    owl2.owlCarousel({
        center: true,
        loop: true,
        nav: true,
        navText: ["<div class='btn prev'></div>", "<div class='btn next'></div>"],
        dots: false,
        items: 6,
        margin: 5,
        responsive: {
            0: {
                items: 2,
                nav: false,
                dots: true
            },
            992: {
                items: 4,
                autoHeight:true
            },
            1200: {
                nav: true,
                items: 4
            },
            1600: {
                nav: true,
                items: 6
            }
        }
    });
    $('.car_block').hide();
    $('.car_block:first').show().addClass('active');
    $('.car_block_tab').removeClass('active');

    var tabsliWidth = $('.car_block_tabs .car_block_tab').outerWidth();
    $('.car_block_tabs span.tabs__pattern').css({
        'width' : tabsliWidth,
        'left' : '0'
    });

    $('.car_block_tab').on('click', function (e) {
        e.preventDefault();
        var index = $(this).index() - 1,
            tabId = $(this).data('attr');

        $('.car_block_tab').removeClass('active');
        $(this).addClass('active');
        $('.car_block').hide().removeClass('active');
        $('.car_block'+tabId).show().addClass('active');


        $('.car_block_tabs span.tabs__pattern').css({
            'left' : index * $(this).outerWidth()
        });
        var linespan = $('.car_block_tabs span.tabs__pattern').width();
        var attr = $(this).attr('data-attr');

    });

    $(window).on('load', function() {
        $('.car_block_tab:first').addClass('active').siblings().not().removeClass('active');
    });

    $(".main_calculator select").select2({
        minimumResultsForSearch: -1
    });


    // Form request CARD
    $('#card_request').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($('#card_request')[0]);
        formData.append('lang', BX.message.LANGUAGE_ID);
        $.ajax({
            type: 'POST',
            url: '/api/feedback/',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                $('body').append('<div class="loadingloader">Loading&#8230;</div>');
            },
            success: function(result) {
                $('.loadingloader, .success_m, .errors_m').remove();
                if (result.status == 'error') {
                    $('<span class="errors_m"><br><br>' + result.message + '<span>').insertAfter('#card_request');
                } else {
                    $('<span class="success_m"><br><br>' + result.message + '<span>').insertAfter('#card_request');
                }
            }
        });
    });

    // $('body').on('swipeup', function(e) {
    // 	console.log('swipeup');
    // }).on('swipedown', function(e) {
    // 	console.log('swipedown');
    // }).on('swipe', function(e) {
    // 	console.log('swipe');
    // })

    // $('body').on('swipeup', function(e) {
    // 	$('header').css({
    // 		'visibility' : 'hidden',
    // 		'opacity' : '0',
    // 		'position':'releative',
    // 		'box-shadow': 'none'
    // 	});
    // }).on('swipedown', function(){
    // 	setTimeout(function(){
    // 		$('header').css({
    // 			'visibility' : 'visible',
    // 			'opacity' : '1',
    // 			'position':'fixed',
    // 			'box-shadow': '0px 0px 20px 1px rgba(0,0,0,0.25)'
    // 		});
    // 	});
    // });


    var lastScrollTop = 0, delta = 35;
    $(window).scroll(function(event){
        var st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        if ((st > lastScrollTop) && (lastScrollTop>0)) {
            // downscroll code
            $("header").css({
                "top": "-80px",
                'box-shadow': 'none'
            });

        } else {
            // upscroll code
            $("header").css({
                "top": "0",
                'box-shadow': '0px 0px 20px 1px rgba(0,0,0,0.1)'
            });
        }
        lastScrollTop = st;
    });

});


$(window).on("scroll load", function() {
    if ($(window).scrollTop() >= 110) {
        $('header').addClass('FixedBg');
    } else {
        $('header').removeClass('FixedBg');
    }
    var owl3 = $(".foto-gallary");
    owl3.owlCarousel({
        loop: true,
        nav: true,
        navText: ["<div class='btn prev'></div>", "<div class='btn next'></div>"],
        dots: true,
        items: 1,
        margin: 5,
        autoHeight: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true
            },
            992: {
                items: 1
            }
        }
    });
});
