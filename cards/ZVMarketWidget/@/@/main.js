/**
 *
 * Author:  Asror Zakirov
 * Created: 6/4/2020 10:52 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

$(document).ready(function () {
    $('.add-cart').on("click", function () {
        $(this).addClass('d-none');
        var parent = $(this).parent('.footer-main');
        var childTouch = parent.children(".touch-main");
        childTouch.removeClass("d-none");
        var catalogId = $(this).attr('data-catalog-id');
        console.log(catalogId);
        $.ajax({
            url: '/kernel/product/setToCart.aspx',
            method: 'GET',
            data: {
                catalog_id: catalogId,
                amount: 1,
            },
            success: function (data) {
                $('#cart_total_amount').html(data);
                console.log(data, $('#cart_total_amount').html(data))
            }
            ,
            error: function (error) {
                console.log(error);
            }
        })

    });
});


$(document).ready(function () {
    $('.clear-add').on("click", function () {
        var clear = $(this).parent(".parent-clear");
        var first = clear.children(".bootstrap-touchspin");
        var second = first.children(".clear-add-btn");
        $('.add-cart').removeClass("d-none");
        $('.touch-main').addClass("d-none");
        second.val("");


    })
})

var basketDelete = function (id) {

    //var card = $('#' + id);
    var catalogId = $('#add-card-' + id).attr('data-catalog-id');
    console.log(catalogId);
    
   /* var clear = $(id).parent(".parent-clear");
    var first = clear.children(".bootstrap-touchspin");
    var second = first.children(".clear-add-btn");*/
    $('#add-card-' + id).removeClass("d-none");
    $('#input-' + id).addClass("d-none");
    //second.val("");
    $('#input-' + id + ' input').val(0);
    $.ajax({
        url: '/kernel/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount:0,
},
    success: function (data) {
        $('#cart_total_amount').html(data);
        console.log(data, $('#cart_total_amount').html(data))
    }
,
    error: function (error) {
        console.log(error);
    }
})
}
var addCard = function (id) {


    //var card = $('#' + id);
    //var catalogId = this.data('catalog-id');
    var catalogId = $('#add-card-' + id).attr('data-catalog-id');
    console.log(catalogId);

    $('#add-card-' + id).addClass('d-none');
    var childTouch = $('#input-' + id);
    childTouch.removeClass("d-none");
    $('#input-' + id + 'input').val(1);
    $.ajax({
        url: '/kernel/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount: 1,
},
    success: function (data) {
        $('#cart_total_amount').html(data);
        console.log(data, $('#cart_total_amount').html(data))
    }
,
    error: function (error) {
        console.log(error);
    }
})
}

