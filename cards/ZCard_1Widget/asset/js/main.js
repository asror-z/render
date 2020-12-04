/**
 *
 * Author:  Asror Zakirov
 * Created: 6/15/2020 6:31 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

$(document).ready(function () {

    $('.add-cart').on("click", function () {
        $(this).addClass('d-none');
        var parent = $(this).parent('.footer-main');
        var childTouch = parent.children(".touch-main");
        childTouch.removeClass("d-none");
        $('#w2').val(1);
    });

  $('.clear-add').on("click", function () {
        var clear = $(this).parent(".parent-clear");
        var first = clear.children(".bootstrap-touchspin");
        var second = first.children(".clear-add-btn");
        $('.add-cart').removeClass("d-none");
        $('.touch-main').addClass("d-none");
        second.val("");
        $('#w2').val(0);
    })
})
